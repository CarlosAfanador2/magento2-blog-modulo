<?php

declare(strict_type=1);

namespace MageMastery\Blog\Model\ResourceModel;

Use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    private const TABLE_NAME = 'magemastery_blog_post';
    private const PRIMARY_KEY = 'post_id';
    protected function _construct()
    {
        $this->_init(maintable: self::TABLE_NAME, idFieldName: self::PRIMARY_KEY);
    }   
}
    