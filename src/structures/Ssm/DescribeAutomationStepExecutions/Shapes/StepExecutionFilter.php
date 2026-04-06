<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StartTimeBefore'|'StartTimeAfter'|'StepExecutionStatus'|'StepExecutionId'|'StepName'|'Action' $Key
 * @property list<string> $Values
 */
class StepExecutionFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'StartTimeBefore'|'StartTimeAfter'|'StepExecutionStatus'|'StepExecutionId'|'StepName'|'Action',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
