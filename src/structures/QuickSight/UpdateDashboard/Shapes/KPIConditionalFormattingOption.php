<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KPIPrimaryValueConditionalFormatting|null $PrimaryValue
 * @property KPIProgressBarConditionalFormatting|null $ProgressBar
 * @property KPIActualValueConditionalFormatting|null $ActualValue
 * @property KPIComparisonValueConditionalFormatting|null $ComparisonValue
 */
class KPIConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     PrimaryValue?: KPIPrimaryValueConditionalFormatting|null,
     *     ProgressBar?: KPIProgressBarConditionalFormatting|null,
     *     ActualValue?: KPIActualValueConditionalFormatting|null,
     *     ComparisonValue?: KPIComparisonValueConditionalFormatting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
