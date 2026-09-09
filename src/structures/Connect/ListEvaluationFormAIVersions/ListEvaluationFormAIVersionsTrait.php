<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormAIVersions;

trait ListEvaluationFormAIVersionsTrait
{
    /**
     * @param ListEvaluationFormAIVersionsRequest $args
     * @return ListEvaluationFormAIVersionsResponse
     */
    public function listEvaluationFormAIVersions(ListEvaluationFormAIVersionsRequest $args)
    {
        $result = parent::listEvaluationFormAIVersions($args->toArray());
        return new ListEvaluationFormAIVersionsResponse($result->toArray());
    }
}
