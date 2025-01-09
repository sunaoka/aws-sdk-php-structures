<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationLastModifiedDateFilterDateRange $DateRange
 */
class ResaleAuthorizationLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: ResaleAuthorizationLastModifiedDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
