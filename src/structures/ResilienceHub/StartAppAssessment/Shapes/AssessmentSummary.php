<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssessmentRiskRecommendation> $riskRecommendations
 * @property string $summary
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     riskRecommendations?: list<AssessmentRiskRecommendation>,
     *     summary?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
