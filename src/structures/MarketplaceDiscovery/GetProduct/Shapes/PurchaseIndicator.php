<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_AVAILABLE_FOR_SUBSCRIPTION'|'AVAILABLE_FOR_USE_WITHOUT_SUBSCRIPTION' $indicatorType
 */
class PurchaseIndicator extends Shape
{
    /**
     * @param array{indicatorType: 'NOT_AVAILABLE_FOR_SUBSCRIPTION'|'AVAILABLE_FOR_USE_WITHOUT_SUBSCRIPTION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
