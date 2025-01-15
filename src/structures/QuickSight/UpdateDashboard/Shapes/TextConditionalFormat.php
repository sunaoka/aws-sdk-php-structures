<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor|null $BackgroundColor
 * @property ConditionalFormattingColor|null $TextColor
 * @property ConditionalFormattingIcon|null $Icon
 */
class TextConditionalFormat extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: ConditionalFormattingColor|null,
     *     TextColor?: ConditionalFormattingColor|null,
     *     Icon?: ConditionalFormattingIcon|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
