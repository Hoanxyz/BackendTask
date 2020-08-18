<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AHT\ReviewCustom\Model;

use Magento\Framework\DataObject;
use Magento\Catalog\Model\Product;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Review\Model\ResourceModel\Review\Product\Collection as ProductCollection;
use Magento\Review\Model\ResourceModel\Review\Status\Collection as StatusCollection;

/**
 * Review model
 *
 * @api
 * @method string getCreatedAt()
 * @method \Magento\Review\Model\Review setCreatedAt(string $value)
 * @method \Magento\Review\Model\Review setEntityId(int $value)
 * @method int getEntityPkValue()
 * @method \Magento\Review\Model\Review setEntityPkValue(int $value)
 * @method int getStatusId()
 * @method \Magento\Review\Model\Review setStatusId(int $value)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Review extends \Magento\Review\Model\Review
{
    /**
     * Validate review summary fields
     *
     * @return bool|string[]
     */
    public function validate()
    {
        $errors = [];

        if (!\Zend_Validate::is($this->getTitle(), 'NotEmpty')) {
            $errors[] = __('Please enter a review summary.');
        }

        if (!\Zend_Validate::is($this->getNickname(), 'NotEmpty')) {
            $errors[] = __('Please enter a nickname.');
        }

        if (!\Zend_Validate::is($this->getDetail(), 'NotEmpty')) {
            $errors[] = __('Please enter a review.');
        }

        if (!\Zend_Validate::is($this->getImgs(), 'NotEmpty')) {
            $errors[] = __('Please add image.');
        }

        if (empty($errors)) {
            return true;
        }
        return $errors;
    }
}
