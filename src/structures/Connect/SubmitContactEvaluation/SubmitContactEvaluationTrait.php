<?php

namespace Sunaoka\Aws\Structures\Connect\SubmitContactEvaluation;

trait SubmitContactEvaluationTrait
{
    /**
     * @param SubmitContactEvaluationRequest $args
     * @return SubmitContactEvaluationResponse
     */
    public function submitContactEvaluation(SubmitContactEvaluationRequest $args)
    {
        $result = parent::submitContactEvaluation($args->toArray());
        return new SubmitContactEvaluationResponse($result->toArray());
    }
}
