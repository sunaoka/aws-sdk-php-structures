<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartResourceEvaluation;

trait StartResourceEvaluationTrait
{
    /**
     * @param StartResourceEvaluationRequest $args
     * @return StartResourceEvaluationResponse
     */
    public function startResourceEvaluation(StartResourceEvaluationRequest $args)
    {
        $result = parent::startResourceEvaluation($args->toArray());
        return new StartResourceEvaluationResponse($result->toArray());
    }
}
