<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationGenAIAnswerAnalysisDetails|null $GenAI
 * @property EvaluationContactLensAnswerAnalysisDetails|null $ContactLens
 */
class EvaluationQuestionAnswerAnalysisDetails extends Shape
{
    /**
     * @param array{
     *     GenAI?: EvaluationGenAIAnswerAnalysisDetails|null,
     *     ContactLens?: EvaluationContactLensAnswerAnalysisDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
