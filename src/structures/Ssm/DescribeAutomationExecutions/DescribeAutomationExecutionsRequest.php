<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomationExecutionFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeAutomationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\AutomationExecutionFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
