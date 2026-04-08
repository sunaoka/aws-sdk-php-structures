<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCT_ID'|'SELLER_OF_RECORD_PROFILE_ID'|'PURCHASE_OPTION_TYPE'|'VISIBILITY_SCOPE'|'AVAILABILITY_STATUS' $filterType
 * @property list<string> $filterValues
 */
class PurchaseOptionFilter extends Shape
{
    /**
     * @param array{
     *     filterType: 'PRODUCT_ID'|'SELLER_OF_RECORD_PROFILE_ID'|'PURCHASE_OPTION_TYPE'|'VISIBILITY_SCOPE'|'AVAILABILITY_STATUS',
     *     filterValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
