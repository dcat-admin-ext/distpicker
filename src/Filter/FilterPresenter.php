<?php

namespace DcatAdminExt\Distpicker\Filter;

use Dcat\Admin\Grid\Filter\Presenter\Presenter;

class FilterPresenter extends Presenter
{
    public function view() : string
    {
        return 'dcat-admin-ext.distpicker::filter';
    }
}
