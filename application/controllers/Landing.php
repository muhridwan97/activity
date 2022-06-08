<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property ResearchModel $research
 * @property MenuModel $menu
 * @property PageModel $page
 * @property BannerModel $banner
 * Class Dashboard
 */
class Landing extends App_Controller
{
	protected $layout = 'layouts/landing';
	/**
	 * Dashboard constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MenuModel', 'menu');
		$this->load->model('PageModel', 'page');
		$this->load->model('BannerModel', 'banner');

		$this->setFilterMethods([
			'page' => 'GET',
		]);
	}

	/**
	 * Show dashboard page.
	 */
	public function index()
	{
		$banners = $this->banner->getAll(['sort_by' => 'id']);

		$this->render('landing/index', compact('banners'));
	}

	public function page($id)
	{
		$content = $this->page->getById($id);
		$this->render('landing/page', compact('content'));
	}
}
