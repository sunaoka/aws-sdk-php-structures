<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ItemsLimitConfiguration $ScatterPlotLimitConfiguration
 */
class ScatterPlotSortConfiguration extends Shape
{
    /**
     * @param array{ScatterPlotLimitConfiguration?: ItemsLimitConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
