<?php

namespace DcatAdminExt\Distpicker;

use Dcat\Admin\Admin;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;

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
            Filter::extend('distpicker', \DcatAdminExt\Distpicker\Filter\DistpickerFilter::class);
        });
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
