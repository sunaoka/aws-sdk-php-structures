<?php

namespace Sunaoka\Aws\Structures\Connect\ActivateEvaluationForm;

trait ActivateEvaluationFormTrait
{
    /**
     * @param ActivateEvaluationFormRequest $args
     * @return ActivateEvaluationFormResponse
     */
    public function activateEvaluationForm(ActivateEvaluationFormRequest $args)
    {
        $result = parent::activateEvaluationForm($args->toArray());
        return new ActivateEvaluationFormResponse($result->toArray());
    }
}
