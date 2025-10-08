<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateEvaluation;

trait UpdateEvaluationTrait
{
    /**
     * @param UpdateEvaluationRequest $args
     * @return UpdateEvaluationResponse
     */
    public function updateEvaluation(UpdateEvaluationRequest $args)
    {
        $result = parent::updateEvaluation($args->toArray());
        return new UpdateEvaluationResponse($result->toArray());
    }
}
