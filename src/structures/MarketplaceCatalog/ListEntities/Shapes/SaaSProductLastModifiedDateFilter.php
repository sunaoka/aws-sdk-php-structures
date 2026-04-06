<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaaSProductLastModifiedDateFilterDateRange|null $DateRange
 */
class SaaSProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: SaaSProductLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
