<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NetworkInsightsAccessScopeAnalysisId
 * @property 'running'|'succeeded'|'failed'|null $AnalysisStatus
 * @property list<Shapes\AccessScopeAnalysisFinding>|null $AnalysisFindings
 * @property string|null $NextToken
 */
class GetNetworkInsightsAccessScopeAnalysisFindingsResponse extends Response
{
}
