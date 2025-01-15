<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleRuleEvaluation|null $simpleRuleEvaluation
 */
class RuleEvaluation extends Shape
{
    /**
     * @param array{simpleRuleEvaluation?: SimpleRuleEvaluation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
