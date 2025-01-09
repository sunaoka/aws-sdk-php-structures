<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GaugeChartConditionalFormattingOption> $ConditionalFormattingOptions
 */
class GaugeChartConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<GaugeChartConditionalFormattingOption>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
