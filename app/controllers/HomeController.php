<?php
/**
* \HomeController
*/

class HomeController extends BaseController
{
	
	public function home()
	{
        $this->view = View::make('home')->with('article', Article::first())
                                        ->with('','hh')
                                        ->withTitle('STONE')
                                        ->withFuckMe('ok!');

        $this->mail = Mail::to(['287970798@qq.com', '64029158@qq.com'])
                            ->from('lcyx <yyloon@126.com>')
                            ->title('fuck me')
                            ->content('<h1>hello....</h1>');
	}
}