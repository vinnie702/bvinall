<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller
{

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
