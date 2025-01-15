<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $RowSort
 * @property PluginVisualItemsLimitConfiguration|null $ItemsLimitConfiguration
 */
class PluginVisualTableQuerySort extends Shape
{
    /**
     * @param array{
     *     RowSort?: list<FieldSortOptions>|null,
     *     ItemsLimitConfiguration?: PluginVisualItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
