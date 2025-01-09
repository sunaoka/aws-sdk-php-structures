<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFlowLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filter
 * @property list<string> $FlowLogIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeFlowLogsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filter?: list<Shapes\Filter>,
     *     FlowLogIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
