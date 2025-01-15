<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsPaths;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $NetworkInsightsPathIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property bool|null $DryRun
 * @property string|null $NextToken
 */
class DescribeNetworkInsightsPathsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsPathIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     DryRun?: bool|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
