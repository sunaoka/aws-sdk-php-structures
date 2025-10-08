<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm;

trait UpdateEvaluationFormTrait
{
    /**
     * @param UpdateEvaluationFormRequest $args
     * @return UpdateEvaluationFormResponse
     */
    public function updateEvaluationForm(UpdateEvaluationFormRequest $args)
    {
        $result = parent::updateEvaluationForm($args->toArray());
        return new UpdateEvaluationFormResponse($result->toArray());
    }
}
