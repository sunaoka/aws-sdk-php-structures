<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResaleAuthorizationLastModifiedDateFilterDateRange|null $DateRange
 */
class ResaleAuthorizationLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: ResaleAuthorizationLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
