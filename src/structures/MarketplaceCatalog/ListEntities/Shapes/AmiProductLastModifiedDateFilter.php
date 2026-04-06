<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmiProductLastModifiedDateFilterDateRange|null $DateRange
 */
class AmiProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: AmiProductLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
