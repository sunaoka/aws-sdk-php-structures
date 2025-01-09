<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ItemsLimit
 */
class PluginVisualItemsLimitConfiguration extends Shape
{
    /**
     * @param array{ItemsLimit?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
