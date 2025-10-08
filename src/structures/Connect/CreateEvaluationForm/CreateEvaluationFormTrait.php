<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm;

trait CreateEvaluationFormTrait
{
    /**
     * @param CreateEvaluationFormRequest $args
     * @return CreateEvaluationFormResponse
     */
    public function createEvaluationForm(CreateEvaluationFormRequest $args)
    {
        $result = parent::createEvaluationForm($args->toArray());
        return new CreateEvaluationFormResponse($result->toArray());
    }
}
