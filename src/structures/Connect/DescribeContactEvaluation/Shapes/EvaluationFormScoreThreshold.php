<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEEDS_IMPROVEMENT'|'EXCEEDS_EXPECTATIONS' $PerformanceCategory
 * @property double|null $MinScorePercentage
 * @property double|null $MaxScorePercentage
 */
class EvaluationFormScoreThreshold extends Shape
{
    /**
     * @param array{
     *     PerformanceCategory: 'NEEDS_IMPROVEMENT'|'EXCEEDS_EXPECTATIONS',
     *     MinScorePercentage?: double|null,
     *     MaxScorePercentage?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
