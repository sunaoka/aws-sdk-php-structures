<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property string $Value
 * @property 'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'EQUAL_TO' $ComparisonType
 */
class DateCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     Value?: string,
     *     ComparisonType?: 'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'EQUAL_TO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
