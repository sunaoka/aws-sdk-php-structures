<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIELD'|'FIELD_TOTAL'|'GRAND_TOTAL' $Role
 */
class PivotTableConditionalFormattingScope extends Shape
{
    /**
     * @param array{Role?: 'FIELD'|'FIELD_TOTAL'|'GRAND_TOTAL'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
