<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageUsageReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ImageIds
 * @property list<string>|null $ReportIds
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property int<1, max>|null $MaxResults
 */
class DescribeImageUsageReportsRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>|null,
     *     ReportIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
