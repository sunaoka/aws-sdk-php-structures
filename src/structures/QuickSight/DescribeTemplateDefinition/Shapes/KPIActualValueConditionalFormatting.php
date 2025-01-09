<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor $TextColor
 * @property ConditionalFormattingIcon $Icon
 */
class KPIActualValueConditionalFormatting extends Shape
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
