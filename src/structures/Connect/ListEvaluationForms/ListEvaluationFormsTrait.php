<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationForms;

trait ListEvaluationFormsTrait
{
    /**
     * @param ListEvaluationFormsRequest $args
     * @return ListEvaluationFormsResponse
     */
    public function listEvaluationForms(ListEvaluationFormsRequest $args)
    {
        $result = parent::listEvaluationForms($args->toArray());
        return new ListEvaluationFormsResponse($result->toArray());
    }
}
