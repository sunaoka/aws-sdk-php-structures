<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PivotTableConditionalFormattingOption>|null $ConditionalFormattingOptions
 */
class PivotTableConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<PivotTableConditionalFormattingOption>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
