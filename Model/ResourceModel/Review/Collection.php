<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\ReviewCustom\Model\ResourceModel\Review;

/**
 * Review collection resource model
 *
 * @api
 * @since 100.0.2
 */
class Collection extends \Magento\Review\Model\ResourceModel\Review\Collection
{
    /**
     * Initialize select
     *
     * @return $this
     */
    protected function _initSelect()
    {
        $this->getSelect()->join(
            ['review_detail' => $this->getReviewDetailTable()],
            'main_table.review_id = review_detail.review_id',
            ['imgs']
        );
        return parent::_initSelect();
    }
}
