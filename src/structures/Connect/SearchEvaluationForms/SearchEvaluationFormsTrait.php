<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEvaluationForms;

trait SearchEvaluationFormsTrait
{
    /**
     * @param SearchEvaluationFormsRequest $args
     * @return SearchEvaluationFormsResponse
     */
    public function searchEvaluationForms(SearchEvaluationFormsRequest $args)
    {
        $result = parent::searchEvaluationForms($args->toArray());
        return new SearchEvaluationFormsResponse($result->toArray());
    }
}
