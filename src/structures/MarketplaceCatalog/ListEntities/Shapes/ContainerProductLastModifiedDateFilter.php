<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerProductLastModifiedDateFilterDateRange|null $DateRange
 */
class ContainerProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: ContainerProductLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
