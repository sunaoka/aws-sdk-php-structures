<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopeAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $NetworkInsightsAccessScopeAnalysisIds
 * @property string|null $NetworkInsightsAccessScopeId
 * @property \Aws\Api\DateTimeResult|null $AnalysisStartTimeBegin
 * @property \Aws\Api\DateTimeResult|null $AnalysisStartTimeEnd
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property bool|null $DryRun
 * @property string|null $NextToken
 */
class DescribeNetworkInsightsAccessScopeAnalysesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisIds?: list<string>|null,
     *     NetworkInsightsAccessScopeId?: string|null,
     *     AnalysisStartTimeBegin?: \Aws\Api\DateTimeResult|null,
     *     AnalysisStartTimeEnd?: \Aws\Api\DateTimeResult|null,
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
