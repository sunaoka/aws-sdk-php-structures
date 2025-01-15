<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableCellConditionalFormatting|null $Cell
 * @property TableRowConditionalFormatting|null $Row
 */
class TableConditionalFormattingOption extends Shape
{
    /**
     * @param array{
     *     Cell?: TableCellConditionalFormatting|null,
     *     Row?: TableRowConditionalFormatting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
