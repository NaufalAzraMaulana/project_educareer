<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }

    public function index() {
        $data['articleCount'] = $this->Dashboard_model->getArticleCount();
        $data['trainingCount'] = $this->Dashboard_model->getTrainingCount();
        $data['applicantCount'] = $this->Dashboard_model->getApplicantCount();
        $data['jobCount'] = $this->Dashboard_model->getJobCount();

        $this->load->view("layout/header");
        $this->load->view("landingpage", $data);
        $this->load->view("layout/footer");
    }
    public function survey() {
        $this->load->view('pelamar/survey');
    }
    public function home() {
        $data['articleCount'] = $this->Dashboard_model->getArticleCount();
        $data['trainingCount'] = $this->Dashboard_model->getTrainingCount();
        $data['applicantCount'] = $this->Dashboard_model->getApplicantCount();
        $data['jobCount'] = $this->Dashboard_model->getJobCount();

        $this->load->view("layout/header");
        $this->load->view("pelamar/home", $data);
        $this->load->view("layout/footer");
    }
    public function artikel() {
        $this->load->view("layout/header");
        $this->load->view("pelamar/artikel");
        $this->load->view("layout/footer");
    }
    public function detail_artikel() {
        $this->load->view("layout/header");
        $this->load->view("pelamar/detail_art1");
        $this->load->view("layout/footer");
    }
}
