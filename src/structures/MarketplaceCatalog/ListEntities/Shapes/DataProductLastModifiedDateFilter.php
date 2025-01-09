<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductLastModifiedDateFilterDateRange $DateRange
 */
class DataProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: DataProductLastModifiedDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
