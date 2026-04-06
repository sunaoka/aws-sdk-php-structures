<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferSetLastModifiedDateFilterDateRange|null $DateRange
 */
class OfferSetLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferSetLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
