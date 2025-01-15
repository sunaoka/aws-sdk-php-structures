<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor|null $ForegroundColor
 */
class GaugeChartArcConditionalFormatting extends Shape
{
    /**
     * @param array{ForegroundColor?: ConditionalFormattingColor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
