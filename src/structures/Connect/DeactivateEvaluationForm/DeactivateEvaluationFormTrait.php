<?php

namespace Sunaoka\Aws\Structures\Connect\DeactivateEvaluationForm;

trait DeactivateEvaluationFormTrait
{
    /**
     * @param DeactivateEvaluationFormRequest $args
     * @return DeactivateEvaluationFormResponse
     */
    public function deactivateEvaluationForm(DeactivateEvaluationFormRequest $args)
    {
        $result = parent::deactivateEvaluationForm($args->toArray());
        return new DeactivateEvaluationFormResponse($result->toArray());
    }
}
