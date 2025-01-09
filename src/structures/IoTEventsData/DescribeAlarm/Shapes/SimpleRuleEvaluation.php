<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputPropertyValue
 * @property 'GREATER'|'GREATER_OR_EQUAL'|'LESS'|'LESS_OR_EQUAL'|'EQUAL'|'NOT_EQUAL' $operator
 * @property string $thresholdValue
 */
class SimpleRuleEvaluation extends Shape
{
    /**
     * @param array{
     *     inputPropertyValue?: string,
     *     operator?: 'GREATER'|'GREATER_OR_EQUAL'|'LESS'|'LESS_OR_EQUAL'|'EQUAL'|'NOT_EQUAL',
     *     thresholdValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
