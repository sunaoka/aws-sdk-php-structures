<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inputPropertyValue
 * @property 'GREATER'|'GREATER_OR_EQUAL'|'LESS'|'LESS_OR_EQUAL'|'EQUAL'|'NOT_EQUAL'|null $operator
 * @property string|null $thresholdValue
 */
class SimpleRuleEvaluation extends Shape
{
    /**
     * @param array{
     *     inputPropertyValue?: string|null,
     *     operator?: 'GREATER'|'GREATER_OR_EQUAL'|'LESS'|'LESS_OR_EQUAL'|'EQUAL'|'NOT_EQUAL'|null,
     *     thresholdValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
