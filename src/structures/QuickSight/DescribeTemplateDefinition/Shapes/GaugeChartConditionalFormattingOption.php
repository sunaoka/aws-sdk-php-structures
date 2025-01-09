<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GaugeChartPrimaryValueConditionalFormatting $PrimaryValue
 * @property GaugeChartArcConditionalFormatting $Arc
 */
class GaugeChartConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     PrimaryValue?: GaugeChartPrimaryValueConditionalFormatting,
     *     Arc?: GaugeChartArcConditionalFormatting
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
