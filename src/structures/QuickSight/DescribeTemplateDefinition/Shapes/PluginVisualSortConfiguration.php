<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PluginVisualTableQuerySort|null $PluginVisualTableQuerySort
 */
class PluginVisualSortConfiguration extends Shape
{
    /**
     * @param array{PluginVisualTableQuerySort?: PluginVisualTableQuerySort|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
