<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDeclarativePoliciesReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<string> $ReportIds
 */
class DescribeDeclarativePoliciesReportsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ReportIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
