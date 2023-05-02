<?php

declare(strict_type=1);

namespace MageMastery\Blog\Model\Post;

use MageMastery\Blog\Model\ResoucerModel\Post\CollectionFactory;
use Magento\Ui\DataProvider\Modifier\PoolInterface;
use Magento\Ui\DataProvider\ModifierPoolDataProvider;

class DataProvider extends ModifierPoolDataProvider
{
    Public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = [],
        PoolInterface $pool = null   
    )
{
    parent::__construct(name,$primaryFieldName,$requestFieldName,$meta,$data,$pool);
    $this->collection=$collectionFactory->create();
}

}
