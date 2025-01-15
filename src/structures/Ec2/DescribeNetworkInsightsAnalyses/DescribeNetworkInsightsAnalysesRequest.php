<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $NetworkInsightsAnalysisIds
 * @property string|null $NetworkInsightsPathId
 * @property \Aws\Api\DateTimeResult|null $AnalysisStartTime
 * @property \Aws\Api\DateTimeResult|null $AnalysisEndTime
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property bool|null $DryRun
 * @property string|null $NextToken
 */
class DescribeNetworkInsightsAnalysesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAnalysisIds?: list<string>|null,
     *     NetworkInsightsPathId?: string|null,
     *     AnalysisStartTime?: \Aws\Api\DateTimeResult|null,
     *     AnalysisEndTime?: \Aws\Api\DateTimeResult|null,
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
