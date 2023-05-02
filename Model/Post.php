<?php

declare(strict_type=1);

namespace MageMastery\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use MagentoMastery\Blog\Model\ResourceModel\Post as BlogResource;
class Post extends AbstractModel 
{
    protected function _construct()
    {
        $this->_init(resourceModel:PostResource::class);
    } 
}
