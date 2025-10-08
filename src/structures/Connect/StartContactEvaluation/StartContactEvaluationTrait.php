<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactEvaluation;

trait StartContactEvaluationTrait
{
    /**
     * @param StartContactEvaluationRequest $args
     * @return StartContactEvaluationResponse
     */
    public function startContactEvaluation(StartContactEvaluationRequest $args)
    {
        $result = parent::startContactEvaluation($args->toArray());
        return new StartContactEvaluationResponse($result->toArray());
    }
}
