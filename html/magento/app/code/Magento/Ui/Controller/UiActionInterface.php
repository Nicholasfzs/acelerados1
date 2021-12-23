<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Ui\Controller;

/**
 * Interface UiActionInterface
 */
interface UiActionInterface
{
    /**
     * Execute action
     *
     * @return mixed
     */
    public function executeAjaxRequest();
}
