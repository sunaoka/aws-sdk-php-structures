<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution;

trait StartQueryExecutionTrait
{
    /**
     * @param StartQueryExecutionRequest $args
     * @return StartQueryExecutionResponse
     */
    public function startQueryExecution(StartQueryExecutionRequest $args)
    {
        $result = parent::startQueryExecution($args->toArray());
        return new StartQueryExecutionResponse($result->toArray());
    }
}
