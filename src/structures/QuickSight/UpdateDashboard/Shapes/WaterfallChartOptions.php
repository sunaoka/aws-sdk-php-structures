<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TotalBarLabel
 */
class WaterfallChartOptions extends Shape
{
    /**
     * @param array{TotalBarLabel?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
