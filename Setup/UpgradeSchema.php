<?php
namespace AHT\ReviewCustom\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface 
{
	public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context) 
	{
		if (version_compare($context->getVersion(), '1.0.2', '<')) {
			$setup->getConnection()->changeColumn(
				$setup->getTable('review_detail'),
				'review_img',
				'imgs',
				[
					'type'     => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					'length'   => 255,
					'nullable' => true,
					'comment'  => 'Review image'
				]
			);
		}
	}
}