<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableConditionalFormattingOption> $ConditionalFormattingOptions
 */
class TableConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<TableConditionalFormattingOption>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
