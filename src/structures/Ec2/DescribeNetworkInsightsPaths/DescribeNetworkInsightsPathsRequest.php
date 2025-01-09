<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsPaths;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $NetworkInsightsPathIds
 * @property list<Shapes\Filter> $Filters
 * @property int<1, 100> $MaxResults
 * @property bool $DryRun
 * @property string $NextToken
 */
class DescribeNetworkInsightsPathsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsPathIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<1, 100>,
     *     DryRun?: bool,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
