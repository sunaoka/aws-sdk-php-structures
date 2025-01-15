<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GaugeChartConditionalFormattingOption>|null $ConditionalFormattingOptions
 */
class GaugeChartConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<GaugeChartConditionalFormattingOption>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
