<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutomationExecutionId
 * @property list<Shapes\StepExecutionFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $ReverseOrder
 */
class DescribeAutomationStepExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AutomationExecutionId: string,
     *     Filters?: list<Shapes\StepExecutionFilter>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ReverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
