<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFlowLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filter
 * @property list<string>|null $FlowLogIds
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeFlowLogsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filter?: list<Shapes\Filter>|null,
     *     FlowLogIds?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
