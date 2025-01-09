<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PluginVisualTableQuerySort $PluginVisualTableQuerySort
 */
class PluginVisualSortConfiguration extends Shape
{
    /**
     * @param array{PluginVisualTableQuerySort?: PluginVisualTableQuerySort} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
