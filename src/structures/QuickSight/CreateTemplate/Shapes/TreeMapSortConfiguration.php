<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $TreeMapSort
 * @property ItemsLimitConfiguration $TreeMapGroupItemsLimitConfiguration
 */
class TreeMapSortConfiguration extends Shape
{
    /**
     * @param array{
     *     TreeMapSort?: list<FieldSortOptions>,
     *     TreeMapGroupItemsLimitConfiguration?: ItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
