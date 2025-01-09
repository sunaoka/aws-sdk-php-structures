<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsAccessScopeAnalysisId
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetNetworkInsightsAccessScopeAnalysisFindingsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
