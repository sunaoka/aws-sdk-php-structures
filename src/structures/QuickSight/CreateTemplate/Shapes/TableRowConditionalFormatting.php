<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor|null $BackgroundColor
 * @property ConditionalFormattingColor|null $TextColor
 */
class TableRowConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: ConditionalFormattingColor|null,
     *     TextColor?: ConditionalFormattingColor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
