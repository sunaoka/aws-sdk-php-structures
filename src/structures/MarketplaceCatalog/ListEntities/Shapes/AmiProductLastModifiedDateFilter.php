<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmiProductLastModifiedDateFilterDateRange $DateRange
 */
class AmiProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: AmiProductLastModifiedDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
