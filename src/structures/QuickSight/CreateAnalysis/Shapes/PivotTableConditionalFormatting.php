<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PivotTableConditionalFormattingOption> $ConditionalFormattingOptions
 */
class PivotTableConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<PivotTableConditionalFormattingOption>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
