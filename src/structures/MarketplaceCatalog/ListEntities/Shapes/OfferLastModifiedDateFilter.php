<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferLastModifiedDateFilterDateRange $DateRange
 */
class OfferLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferLastModifiedDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
