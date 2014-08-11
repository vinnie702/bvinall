<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller
{

    public $bcControllerUrl = '/location';
    public $bcControllerText = "<i class='fa fa-building'></i> Locations";

    public $bcViewText;



    /**
     * TODO: short description.
     *-
     * @return TODO
     */
    function workHome()
    {


	$this->load->view('template/workHeader');
	$this->load->view('work/home');
	$this->load->view('template/workFooter');

    }
}
