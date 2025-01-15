<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableConditionalFormattingOption>|null $ConditionalFormattingOptions
 */
class TableConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<TableConditionalFormattingOption>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
