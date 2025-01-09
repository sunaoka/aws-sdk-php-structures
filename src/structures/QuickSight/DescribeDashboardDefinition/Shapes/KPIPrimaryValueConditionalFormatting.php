<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor $TextColor
 * @property ConditionalFormattingIcon $Icon
 */
class KPIPrimaryValueConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     TextColor?: ConditionalFormattingColor,
     *     Icon?: ConditionalFormattingIcon
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
