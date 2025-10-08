<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution;

trait GetQueryExecutionTrait
{
    /**
     * @param GetQueryExecutionRequest $args
     * @return GetQueryExecutionResponse
     */
    public function getQueryExecution(GetQueryExecutionRequest $args)
    {
        $result = parent::getQueryExecution($args->toArray());
        return new GetQueryExecutionResponse($result->toArray());
    }
}
