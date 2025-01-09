<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomationExecutionFilter> $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class DescribeAutomationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\AutomationExecutionFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
