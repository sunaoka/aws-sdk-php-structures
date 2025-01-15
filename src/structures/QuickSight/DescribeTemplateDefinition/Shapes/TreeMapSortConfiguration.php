<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $TreeMapSort
 * @property ItemsLimitConfiguration|null $TreeMapGroupItemsLimitConfiguration
 */
class TreeMapSortConfiguration extends Shape
{
    /**
     * @param array{
     *     TreeMapSort?: list<FieldSortOptions>|null,
     *     TreeMapGroupItemsLimitConfiguration?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
