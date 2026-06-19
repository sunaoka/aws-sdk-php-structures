<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUESTION_ONLY'|'SECTION_ONLY'|'POINTS_BASED' $Mode
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<EvaluationFormScoreThreshold>|null $ScoreThresholds
 */
class EvaluationFormScoringStrategy extends Shape
{
    /**
     * @param array{
     *     Mode: 'QUESTION_ONLY'|'SECTION_ONLY'|'POINTS_BASED',
     *     Status: 'ENABLED'|'DISABLED',
     *     ScoreThresholds?: list<EvaluationFormScoreThreshold>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
