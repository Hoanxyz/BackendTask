<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AHT\ReviewCustom\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;

/**
 * Review section
 */
class Review extends \Magento\Review\CustomerData\Review
{
    /**
     * {@inheritdoc}
     */
    public function getSectionData()
    {
        return (array)$this->reviewSession->getFormData(true) + ['nickname' => '','title' => '', 'detail' => '','imgs' => ''];
    }
}
