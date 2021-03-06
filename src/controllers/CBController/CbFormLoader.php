<?php

namespace crocodicstudio\crudbooster\controllers\CBController;

trait CbFormLoader
{

    public $button_cancel = true;

    public $button_edit = true;

    public $button_save = true;

    public $button_selected = [];

    public $button_add = true;

    public $button_addmore = true;

    public $show_addaction = true;

    public $button_detail = true;

    protected function cbFormLoader()
    {
        $this->data['button_add'] = $this->button_add;
        $this->data['button_addmore'] = $this->button_addmore;
        $this->data['button_cancel'] = $this->button_cancel;
        $this->data['button_edit'] = $this->button_edit;
        $this->data['button_save'] = $this->button_save;
        $this->data['button_selected'] = $this->button_selected;
        $this->data['addaction'] = ($this->show_addaction) ? $this->addaction : null;
        $this->data['button_detail'] = $this->button_detail;
    }
}