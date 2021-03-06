<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2018 Amasty (https://www.amasty.com)
 * @package Amasty_Shiprestriction
 */


namespace Amasty\Shiprestriction\Plugin;

class ProductAttributes extends \Amasty\CommonRules\Plugin\ProductAttributes
{
    /**
     * ProductAttributes constructor.
     * @param \Amasty\Shiprestriction\Model\ResourceModel\Rule $resourceTable
     */
    public function __construct(\Amasty\Shiprestriction\Model\ResourceModel\Rule $resourceTable)
    {
        parent::__construct($resourceTable);
    }
}
