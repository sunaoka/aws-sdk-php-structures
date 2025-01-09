<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NetworkInsightsAccessScopeAnalysisId
 * @property 'running'|'succeeded'|'failed' $AnalysisStatus
 * @property list<Shapes\AccessScopeAnalysisFinding> $AnalysisFindings
 * @property string $NextToken
 */
class GetNetworkInsightsAccessScopeAnalysisFindingsResponse extends Response
{
}
