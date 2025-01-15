<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ForegroundColor
 * @property string|null $BackgroundColor
 */
class GaugeChartColorConfiguration extends Shape
{
    /**
     * @param array{
     *     ForegroundColor?: string|null,
     *     BackgroundColor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
