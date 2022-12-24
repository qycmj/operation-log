<?php

namespace Dcat\Admin\OperationLog;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\OperationLog\Http\Middleware\LogOperation;

class OperationLogServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

    protected $middleware = [
        'middle' => [ // 注册中间件
            LogOperation::class,
        ],
    ];

    // 定义菜单
    protected $menu = [
        [
            'title' => 'Operation Log',
            'uri'   => 'auth/operation-logs',
            'icon'  => '', // 图标可以留空
        ],
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
