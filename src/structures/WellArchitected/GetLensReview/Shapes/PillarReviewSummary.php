<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PillarId
 * @property string $PillarName
 * @property string $Notes
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $RiskCounts
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $PrioritizedRiskCounts
 */
class PillarReviewSummary extends Shape
{
    /**
     * @param array{
     *     PillarId?: string,
     *     PillarName?: string,
     *     Notes?: string,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
