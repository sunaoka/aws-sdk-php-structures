<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInsightsAccessScopeAnalysisId
 * @property string $NetworkInsightsAccessScopeId
 * @property string $FindingId
 * @property list<PathComponent> $FindingComponents
 */
class AccessScopeAnalysisFinding extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId?: string,
     *     NetworkInsightsAccessScopeId?: string,
     *     FindingId?: string,
     *     FindingComponents?: list<PathComponent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
