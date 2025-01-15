<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDeclarativePoliciesReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<string>|null $ReportIds
 */
class DescribeDeclarativePoliciesReportsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ReportIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
