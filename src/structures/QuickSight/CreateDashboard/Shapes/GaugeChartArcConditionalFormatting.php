<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor $ForegroundColor
 */
class GaugeChartArcConditionalFormatting extends Shape
{
    /**
     * @param array{ForegroundColor?: ConditionalFormattingColor} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
