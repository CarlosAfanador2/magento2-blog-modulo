<?php

declare(strict_Type=1);

namespace MageMastery\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel 
{
    protected function _construct()
    {
        $this->_init();
        parent::_construct(); //TODO: Cambiar el resguardo generado automáticamente
    } 
}
