<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormVersions;

trait ListEvaluationFormVersionsTrait
{
    /**
     * @param ListEvaluationFormVersionsRequest $args
     * @return ListEvaluationFormVersionsResponse
     */
    public function listEvaluationFormVersions(ListEvaluationFormVersionsRequest $args)
    {
        $result = parent::listEvaluationFormVersions($args->toArray());
        return new ListEvaluationFormVersionsResponse($result->toArray());
    }
}
