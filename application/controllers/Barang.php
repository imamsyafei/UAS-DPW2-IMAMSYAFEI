<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang/barang_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kdbrng' => $row->kdbrng,
		'kdsatuan' => $row->kdsatuan,
		'nmbrng' => $row->nmbrng,
		'hrgjual' => $row->hrgjual,
		'hrgbeli' => $row->hrgbeli,
		'stok' => $row->stok,
		'merek' => $row->merek,
		'tipe' => $row->tipe,
	    );
            $this->load->view('barang/barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang/create_action'),
	    'kdbrng' => set_value('kdbrng'),
	    'kdsatuan' => set_value('kdsatuan'),
	    'nmbrng' => set_value('nmbrng'),
	    'hrgjual' => set_value('hrgjual'),
	    'hrgbeli' => set_value('hrgbeli'),
	    'stok' => set_value('stok'),
	    'merek' => set_value('merek'),
	    'tipe' => set_value('tipe'),
	);
        $this->load->view('barang/barang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kdsatuan' => $this->input->post('kdsatuan',TRUE),
		'nmbrng' => $this->input->post('nmbrng',TRUE),
		'hrgjual' => $this->input->post('hrgjual',TRUE),
		'hrgbeli' => $this->input->post('hrgbeli',TRUE),
		'stok' => $this->input->post('stok',TRUE),
		'merek' => $this->input->post('merek',TRUE),
		'tipe' => $this->input->post('tipe',TRUE),
	    );

            $this->Barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang/update_action'),
		'kdbrng' => set_value('kdbrng', $row->kdbrng),
		'kdsatuan' => set_value('kdsatuan', $row->kdsatuan),
		'nmbrng' => set_value('nmbrng', $row->nmbrng),
		'hrgjual' => set_value('hrgjual', $row->hrgjual),
		'hrgbeli' => set_value('hrgbeli', $row->hrgbeli),
		'stok' => set_value('stok', $row->stok),
		'merek' => set_value('merek', $row->merek),
		'tipe' => set_value('tipe', $row->tipe),
	    );
            $this->load->view('barang/barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kdbrng', TRUE));
        } else {
            $data = array(
		'kdsatuan' => $this->input->post('kdsatuan',TRUE),
		'nmbrng' => $this->input->post('nmbrng',TRUE),
		'hrgjual' => $this->input->post('hrgjual',TRUE),
		'hrgbeli' => $this->input->post('hrgbeli',TRUE),
		'stok' => $this->input->post('stok',TRUE),
		'merek' => $this->input->post('merek',TRUE),
		'tipe' => $this->input->post('tipe',TRUE),
	    );

            $this->Barang_model->update($this->input->post('kdbrng', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kdsatuan', 'kdsatuan', 'trim|required');
	$this->form_validation->set_rules('nmbrng', 'nmbrng', 'trim|required');
	$this->form_validation->set_rules('hrgjual', 'hrgjual', 'trim|required|numeric');
	$this->form_validation->set_rules('hrgbeli', 'hrgbeli', 'trim|required|numeric');
	$this->form_validation->set_rules('stok', 'stok', 'trim|required');
	$this->form_validation->set_rules('merek', 'merek', 'trim|required');
	$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');

	$this->form_validation->set_rules('kdbrng', 'kdbrng', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-16 14:11:42 */
/* http://harviacode.com */