<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $RowSort
 * @property PluginVisualItemsLimitConfiguration $ItemsLimitConfiguration
 */
class PluginVisualTableQuerySort extends Shape
{
    /**
     * @param array{
     *     RowSort?: list<FieldSortOptions>,
     *     ItemsLimitConfiguration?: PluginVisualItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
