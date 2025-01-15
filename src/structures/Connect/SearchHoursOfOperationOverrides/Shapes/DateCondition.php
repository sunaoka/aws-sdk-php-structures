<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property string|null $Value
 * @property 'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'EQUAL_TO'|null $ComparisonType
 */
class DateCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     Value?: string|null,
     *     ComparisonType?: 'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'EQUAL_TO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
