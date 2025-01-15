<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIELD'|'FIELD_TOTAL'|'GRAND_TOTAL'|null $Role
 */
class PivotTableConditionalFormattingScope extends Shape
{
    /**
     * @param array{Role?: 'FIELD'|'FIELD_TOTAL'|'GRAND_TOTAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
