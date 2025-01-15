<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInsightsAccessScopeAnalysisId
 * @property string|null $NetworkInsightsAccessScopeId
 * @property string|null $FindingId
 * @property list<PathComponent>|null $FindingComponents
 */
class AccessScopeAnalysisFinding extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId?: string|null,
     *     NetworkInsightsAccessScopeId?: string|null,
     *     FindingId?: string|null,
     *     FindingComponents?: list<PathComponent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
