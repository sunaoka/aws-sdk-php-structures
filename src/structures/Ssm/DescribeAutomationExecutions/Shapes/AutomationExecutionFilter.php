<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DocumentNamePrefix'|'ExecutionStatus'|'ExecutionId'|'ParentExecutionId'|'CurrentAction'|'StartTimeBefore'|'StartTimeAfter'|'AutomationType'|'TagKey'|'TargetResourceGroup'|'AutomationSubtype'|'OpsItemId' $Key
 * @property list<string> $Values
 */
class AutomationExecutionFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'DocumentNamePrefix'|'ExecutionStatus'|'ExecutionId'|'ParentExecutionId'|'CurrentAction'|'StartTimeBefore'|'StartTimeAfter'|'AutomationType'|'TagKey'|'TargetResourceGroup'|'AutomationSubtype'|'OpsItemId',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
