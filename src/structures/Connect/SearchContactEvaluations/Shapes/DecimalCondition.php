<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property double|null $MinValue
 * @property double|null $MaxValue
 * @property 'GREATER_OR_EQUAL'|'GREATER'|'LESSER_OR_EQUAL'|'LESSER'|'EQUAL'|'NOT_EQUAL'|'RANGE'|null $ComparisonType
 */
class DecimalCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     MinValue?: double|null,
     *     MaxValue?: double|null,
     *     ComparisonType?: 'GREATER_OR_EQUAL'|'GREATER'|'LESSER_OR_EQUAL'|'LESSER'|'EQUAL'|'NOT_EQUAL'|'RANGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
