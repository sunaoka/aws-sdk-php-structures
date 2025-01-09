<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PillarId
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int> $RiskCounts
 * @property list<QuestionMetric> $Questions
 */
class PillarMetric extends Shape
{
    /**
     * @param array{
     *     PillarId?: string,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int>,
     *     Questions?: list<QuestionMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
