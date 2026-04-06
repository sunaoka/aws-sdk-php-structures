<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property int|null $MinValue
 * @property int|null $MaxValue
 * @property 'GREATER_OR_EQUAL'|'GREATER'|'LESSER_OR_EQUAL'|'LESSER'|'EQUAL'|'NOT_EQUAL'|'RANGE'|null $ComparisonType
 */
class NumberCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     MinValue?: int|null,
     *     MaxValue?: int|null,
     *     ComparisonType?: 'GREATER_OR_EQUAL'|'GREATER'|'LESSER_OR_EQUAL'|'LESSER'|'EQUAL'|'NOT_EQUAL'|'RANGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
