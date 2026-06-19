<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuestionPointsConfiguration|null $PointsConfiguration
 * @property bool|null $IsExcludedFromScoring
 * @property list<EvaluationFormScoreThreshold>|null $ScoreThresholds
 */
class EvaluationFormQuestionScoringConfiguration extends Shape
{
    /**
     * @param array{
     *     PointsConfiguration?: QuestionPointsConfiguration|null,
     *     IsExcludedFromScoring?: bool|null,
     *     ScoreThresholds?: list<EvaluationFormScoreThreshold>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
