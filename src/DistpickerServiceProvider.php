<?php

namespace DcatAdminExt\Distpicker;

use Dcat\Admin\Admin;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;

class DistpickerServiceProvider extends ServiceProvider
{
	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

        Admin::booting(function () {
            Form::extend('distpicker', \DcatAdminExt\Distpicker\Form\Distpicker::class);
        });
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
