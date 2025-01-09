<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor $BackgroundColor
 * @property ConditionalFormattingColor $TextColor
 * @property ConditionalFormattingIcon $Icon
 */
class TextConditionalFormat extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: ConditionalFormattingColor,
     *     TextColor?: ConditionalFormattingColor,
     *     Icon?: ConditionalFormattingIcon
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
