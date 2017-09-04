<?php
/**
* \HomeController
*/
class HomeController extends BaseController
{
	
	public function home()
	{
		$article = Article::find(32);
		require dirname(__File__) . '/../views/home.php';
	}
}