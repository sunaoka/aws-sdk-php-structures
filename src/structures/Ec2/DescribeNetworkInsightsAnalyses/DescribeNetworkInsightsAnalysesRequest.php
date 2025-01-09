<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $NetworkInsightsAnalysisIds
 * @property string $NetworkInsightsPathId
 * @property \Aws\Api\DateTimeResult $AnalysisStartTime
 * @property \Aws\Api\DateTimeResult $AnalysisEndTime
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property bool $DryRun
 * @property string $NextToken
 */
class DescribeNetworkInsightsAnalysesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAnalysisIds?: list<string>,
     *     NetworkInsightsPathId?: string,
     *     AnalysisStartTime?: \Aws\Api\DateTimeResult,
     *     AnalysisEndTime?: \Aws\Api\DateTimeResult,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
