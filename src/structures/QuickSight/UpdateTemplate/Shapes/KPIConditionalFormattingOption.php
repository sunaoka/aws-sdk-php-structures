<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KPIPrimaryValueConditionalFormatting|null $PrimaryValue
 * @property KPIProgressBarConditionalFormatting|null $ProgressBar
 */
class KPIConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     PrimaryValue?: KPIPrimaryValueConditionalFormatting|null,
     *     ProgressBar?: KPIProgressBarConditionalFormatting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
