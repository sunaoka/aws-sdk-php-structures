<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor $TextColor
 * @property ConditionalFormattingIcon $Icon
 */
class KPIComparisonValueConditionalFormatting extends Shape
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
