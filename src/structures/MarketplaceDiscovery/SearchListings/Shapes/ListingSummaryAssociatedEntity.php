<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductInformation|null $product
 */
class ListingSummaryAssociatedEntity extends Shape
{
    /**
     * @param array{product?: ProductInformation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
