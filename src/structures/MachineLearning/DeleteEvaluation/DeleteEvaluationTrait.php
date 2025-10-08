<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteEvaluation;

trait DeleteEvaluationTrait
{
    /**
     * @param DeleteEvaluationRequest $args
     * @return DeleteEvaluationResponse
     */
    public function deleteEvaluation(DeleteEvaluationRequest $args)
    {
        $result = parent::deleteEvaluation($args->toArray());
        return new DeleteEvaluationResponse($result->toArray());
    }
}
