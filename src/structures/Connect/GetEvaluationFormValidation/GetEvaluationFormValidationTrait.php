<?php

namespace Sunaoka\Aws\Structures\Connect\GetEvaluationFormValidation;

trait GetEvaluationFormValidationTrait
{
    /**
     * @param GetEvaluationFormValidationRequest $args
     * @return GetEvaluationFormValidationResponse
     */
    public function getEvaluationFormValidation(GetEvaluationFormValidationRequest $args)
    {
        $result = parent::getEvaluationFormValidation($args->toArray());
        return new GetEvaluationFormValidationResponse($result->toArray());
    }
}
