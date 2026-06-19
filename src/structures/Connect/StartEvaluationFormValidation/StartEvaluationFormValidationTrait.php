<?php

namespace Sunaoka\Aws\Structures\Connect\StartEvaluationFormValidation;

trait StartEvaluationFormValidationTrait
{
    /**
     * @param StartEvaluationFormValidationRequest $args
     * @return StartEvaluationFormValidationResponse
     */
    public function startEvaluationFormValidation(StartEvaluationFormValidationRequest $args)
    {
        $result = parent::startEvaluationFormValidation($args->toArray());
        return new StartEvaluationFormValidationResponse($result->toArray());
    }
}
