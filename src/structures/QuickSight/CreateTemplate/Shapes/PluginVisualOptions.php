<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PluginVisualProperty> $VisualProperties
 */
class PluginVisualOptions extends Shape
{
    /**
     * @param array{VisualProperties?: list<PluginVisualProperty>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
