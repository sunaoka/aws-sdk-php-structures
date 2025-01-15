<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductLastModifiedDateFilterDateRange|null $DateRange
 */
class DataProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: DataProductLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
