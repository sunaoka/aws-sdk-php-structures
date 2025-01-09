<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableCellConditionalFormatting $Cell
 */
class PivotTableConditionalFormattingOption extends Shape
{
    /**
     * @param array{Cell?: PivotTableCellConditionalFormatting} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
