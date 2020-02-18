<?php

if (!defined('_PS_VERSION_')) {
    exit(1);
}

class PrestasafeLazyLoading extends Module
{
    public function __construct()
    {

        $this->name = 'prestasafelazyloading';
        $this->tab = 'seo';
        $this->version = '1.0.0';
        $this->author = 'PrestaSafe';
        $this->need_instance = 1;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Add lazy loading on your image');
        $this->description = $this->l('Add better performances on loading image on you prestashop');

    }

    public function install()
    {
        return parent::install() && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->unregisterHook('displayHeader');
    }


    public function hookdisplayHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/jquery.lazy.min.js');
        $this->context->controller->addJS($this->_path.'/views/js/lazy.js');
    }
}