<?php

/**
 * Ashraf
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Ashraf
 * @package     Ashraf_HelloWorld
 * @copyright   Copyright (c) 2020 Ashraf Hatia
 */

declare(strict_types=1);

namespace Ashraf\HelloWorld\Controller\Page;

//this commented code is for build page

// use Magento\Framework\App\Action\Action;
// use Magento\Framework\Controller\ResultFactory;
// use Magento\Framework\View\Result\Page;

// class View extends Action
// {
//     public function execute()
//     {
//         /** @var Page $resultPage */
//         return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
//     }
// }


//this code for pass data to tempalate

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('ashraf.layout.example');
        $block->setData('custom_parameter', 'This Data from the Controller');

        return $page;
    }
}