<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomationExecutionFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAutomationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\AutomationExecutionFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
