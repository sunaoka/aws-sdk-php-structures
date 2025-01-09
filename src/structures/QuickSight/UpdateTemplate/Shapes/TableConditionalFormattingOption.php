<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableCellConditionalFormatting $Cell
 * @property TableRowConditionalFormatting $Row
 */
class TableConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     Cell?: TableCellConditionalFormatting,
     *     Row?: TableRowConditionalFormatting
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
