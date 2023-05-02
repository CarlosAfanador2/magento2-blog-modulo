<?php

declare(strict_Type=1);

namespace MageMastery\Blog\Model\ResourceModel\Post;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    public function execute(): Page
    {
        /** @var page $resultPage */
       $resultPage = $this->resultFactory->create(type:ResultFactory::TYPE_PAGE);
       $resultPage->setActiveMenu(itemid:'MageMastery_Blog::post');
       $resultPage->getConfig()->getTitle()->prepend(__('Manage Posts'));
       return $resultPage;

    }
}