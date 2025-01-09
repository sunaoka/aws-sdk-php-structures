<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAccessScopeAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInsightsAccessScopeAnalysisId
 * @property string $NetworkInsightsAccessScopeAnalysisArn
 * @property string $NetworkInsightsAccessScopeId
 * @property 'running'|'succeeded'|'failed' $Status
 * @property string $StatusMessage
 * @property string $WarningMessage
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property 'true'|'false'|'unknown' $FindingsFound
 * @property int $AnalyzedEniCount
 * @property list<Tag> $Tags
 */
class NetworkInsightsAccessScopeAnalysis extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId?: string,
     *     NetworkInsightsAccessScopeAnalysisArn?: string,
     *     NetworkInsightsAccessScopeId?: string,
     *     Status?: 'running'|'succeeded'|'failed',
     *     StatusMessage?: string,
     *     WarningMessage?: string,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     FindingsFound?: 'true'|'false'|'unknown',
     *     AnalyzedEniCount?: int,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
