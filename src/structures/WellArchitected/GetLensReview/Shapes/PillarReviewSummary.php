<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PillarId
 * @property string|null $PillarName
 * @property string|null $Notes
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $RiskCounts
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $PrioritizedRiskCounts
 */
class PillarReviewSummary extends Shape
{
    /**
     * @param array{
     *     PillarId?: string|null,
     *     PillarName?: string|null,
     *     Notes?: string|null,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
