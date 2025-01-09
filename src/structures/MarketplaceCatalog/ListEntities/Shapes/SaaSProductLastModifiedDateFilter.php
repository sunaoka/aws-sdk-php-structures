<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaaSProductLastModifiedDateFilterDateRange $DateRange
 */
class SaaSProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: SaaSProductLastModifiedDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
