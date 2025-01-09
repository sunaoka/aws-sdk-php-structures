<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopeAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $NetworkInsightsAccessScopeAnalysisIds
 * @property string $NetworkInsightsAccessScopeId
 * @property \Aws\Api\DateTimeResult $AnalysisStartTimeBegin
 * @property \Aws\Api\DateTimeResult $AnalysisStartTimeEnd
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property bool $DryRun
 * @property string $NextToken
 */
class DescribeNetworkInsightsAccessScopeAnalysesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisIds?: list<string>,
     *     NetworkInsightsAccessScopeId?: string,
     *     AnalysisStartTimeBegin?: \Aws\Api\DateTimeResult,
     *     AnalysisStartTimeEnd?: \Aws\Api\DateTimeResult,
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
