<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetEvaluation;

trait GetEvaluationTrait
{
    /**
     * @param GetEvaluationRequest $args
     * @return GetEvaluationResponse
     */
    public function getEvaluation(GetEvaluationRequest $args)
    {
        $result = parent::getEvaluation($args->toArray());
        return new GetEvaluationResponse($result->toArray());
    }
}
