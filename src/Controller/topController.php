<?php
namespace App\Controller;

use App\Controller\AppController;

class topController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->viewBuilder()->layout('pattern01');
		// $this->set('header3', ' this is sample site ');
		// $this->set('footer50', '&copy;2018 libro.');
	}

	public function index()
	{
		// $msg = "これはサンプルアクションです。";
		// $this->set('message', $msg);
	}
}