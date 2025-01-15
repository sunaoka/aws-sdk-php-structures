<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsAccessScopeAnalysisId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetNetworkInsightsAccessScopeAnalysisFindingsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
