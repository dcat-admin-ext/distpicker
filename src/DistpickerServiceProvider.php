<?php

namespace DcatAdminExt\Distpicker;

use DcatAdminExt\Distpicker\Form\Distpicker;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;

class DistpickerServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/distpicker.min.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();
        Form::extend('distpicker', Distpicker::class);

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
