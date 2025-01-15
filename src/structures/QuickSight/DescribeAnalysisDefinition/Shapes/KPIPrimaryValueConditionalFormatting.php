<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor|null $TextColor
 * @property ConditionalFormattingIcon|null $Icon
 */
class KPIPrimaryValueConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     TextColor?: ConditionalFormattingColor|null,
     *     Icon?: ConditionalFormattingIcon|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
