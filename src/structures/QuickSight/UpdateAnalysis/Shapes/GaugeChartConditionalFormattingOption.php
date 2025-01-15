<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GaugeChartPrimaryValueConditionalFormatting|null $PrimaryValue
 * @property GaugeChartArcConditionalFormatting|null $Arc
 */
class GaugeChartConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     PrimaryValue?: GaugeChartPrimaryValueConditionalFormatting|null,
     *     Arc?: GaugeChartArcConditionalFormatting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
