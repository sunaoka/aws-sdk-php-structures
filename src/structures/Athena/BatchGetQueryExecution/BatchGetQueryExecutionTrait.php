<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution;

trait BatchGetQueryExecutionTrait
{
    /**
     * @param BatchGetQueryExecutionRequest $args
     * @return BatchGetQueryExecutionResponse
     */
    public function batchGetQueryExecution(BatchGetQueryExecutionRequest $args)
    {
        $result = parent::batchGetQueryExecution($args->toArray());
        return new BatchGetQueryExecutionResponse($result->toArray());
    }
}
