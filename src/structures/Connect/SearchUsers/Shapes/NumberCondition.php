<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property int $MinValue
 * @property int $MaxValue
 * @property 'GREATER_OR_EQUAL'|'GREATER'|'LESSER_OR_EQUAL'|'LESSER'|'EQUAL'|'NOT_EQUAL'|'RANGE' $ComparisonType
 */
class NumberCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     MinValue?: int,
     *     MaxValue?: int,
     *     ComparisonType?: 'GREATER_OR_EQUAL'|'GREATER'|'LESSER_OR_EQUAL'|'LESSER'|'EQUAL'|'NOT_EQUAL'|'RANGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
