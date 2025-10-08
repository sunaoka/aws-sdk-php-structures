<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateEvaluation;

trait CreateEvaluationTrait
{
    /**
     * @param CreateEvaluationRequest $args
     * @return CreateEvaluationResponse
     */
    public function createEvaluation(CreateEvaluationRequest $args)
    {
        $result = parent::createEvaluation($args->toArray());
        return new CreateEvaluationResponse($result->toArray());
    }
}
