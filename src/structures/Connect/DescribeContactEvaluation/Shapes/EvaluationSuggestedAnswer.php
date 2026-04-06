<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationAnswerData|null $Value
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $Status
 * @property EvaluationQuestionInputDetails|null $Input
 * @property 'CONTACT_LENS_DATA'|'GEN_AI' $AnalysisType
 * @property EvaluationQuestionAnswerAnalysisDetails|null $AnalysisDetails
 */
class EvaluationSuggestedAnswer extends Shape
{
    /**
     * @param array{
     *     Value?: EvaluationAnswerData|null,
     *     Status: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED',
     *     Input?: EvaluationQuestionInputDetails|null,
     *     AnalysisType: 'CONTACT_LENS_DATA'|'GEN_AI',
     *     AnalysisDetails?: EvaluationQuestionAnswerAnalysisDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
