<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KPIPrimaryValueConditionalFormatting $PrimaryValue
 * @property KPIProgressBarConditionalFormatting $ProgressBar
 * @property KPIActualValueConditionalFormatting $ActualValue
 * @property KPIComparisonValueConditionalFormatting $ComparisonValue
 */
class KPIConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     PrimaryValue?: KPIPrimaryValueConditionalFormatting,
     *     ProgressBar?: KPIProgressBarConditionalFormatting,
     *     ActualValue?: KPIActualValueConditionalFormatting,
     *     ComparisonValue?: KPIComparisonValueConditionalFormatting
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
