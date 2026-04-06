<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssessmentRiskRecommendation>|null $riskRecommendations
 * @property string|null $summary
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     riskRecommendations?: list<AssessmentRiskRecommendation>|null,
     *     summary?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
