<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ForegroundColor
 * @property string $BackgroundColor
 */
class GaugeChartColorConfiguration extends Shape
{
    /**
     * @param array{
     *     ForegroundColor?: string,
     *     BackgroundColor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
