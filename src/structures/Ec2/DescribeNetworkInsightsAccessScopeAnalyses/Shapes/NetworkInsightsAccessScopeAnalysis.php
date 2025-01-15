<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopeAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInsightsAccessScopeAnalysisId
 * @property string|null $NetworkInsightsAccessScopeAnalysisArn
 * @property string|null $NetworkInsightsAccessScopeId
 * @property 'running'|'succeeded'|'failed'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $WarningMessage
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property 'true'|'false'|'unknown'|null $FindingsFound
 * @property int|null $AnalyzedEniCount
 * @property list<Tag>|null $Tags
 */
class NetworkInsightsAccessScopeAnalysis extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId?: string|null,
     *     NetworkInsightsAccessScopeAnalysisArn?: string|null,
     *     NetworkInsightsAccessScopeId?: string|null,
     *     Status?: 'running'|'succeeded'|'failed'|null,
     *     StatusMessage?: string|null,
     *     WarningMessage?: string|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     FindingsFound?: 'true'|'false'|'unknown'|null,
     *     AnalyzedEniCount?: int|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
