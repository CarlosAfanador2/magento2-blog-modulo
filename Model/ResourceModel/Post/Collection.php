<?php

declare(strict_type=1);

namespace MageMastery\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MageMastery\Blog\Model\Post;
use MageMastery\Blog\Model\ResoucerModel\Post as PostResource;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(model: Post::Class, resourcemodel: PostResource::Class);
    }
}