<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDeclarativePoliciesReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property list<string> $ReportIds
 */
class DescribeDeclarativePoliciesReportsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     ReportIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
