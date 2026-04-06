<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $dateTime
 * @property string $name
 * @property 'EQUAL'|'NOT_EQUAL'|'GREATER_THAN_EQUAL_TO'|'GREATER_THAN'|'LESS_THAN_EQUAL_TO'|'LESS_THAN' $operator
 */
class DateTimeFilterExpression extends Shape
{
    /**
     * @param array{
     *     dateTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     operator: 'EQUAL'|'NOT_EQUAL'|'GREATER_THAN_EQUAL_TO'|'GREATER_THAN'|'LESS_THAN_EQUAL_TO'|'LESS_THAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
