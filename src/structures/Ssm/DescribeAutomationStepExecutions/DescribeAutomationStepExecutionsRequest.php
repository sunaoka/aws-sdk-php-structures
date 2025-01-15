<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutomationExecutionId
 * @property list<Shapes\StepExecutionFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property bool|null $ReverseOrder
 */
class DescribeAutomationStepExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AutomationExecutionId: string,
     *     Filters?: list<Shapes\StepExecutionFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     ReverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
