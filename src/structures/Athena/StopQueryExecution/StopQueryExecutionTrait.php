<?php

namespace Sunaoka\Aws\Structures\Athena\StopQueryExecution;

trait StopQueryExecutionTrait
{
    /**
     * @param StopQueryExecutionRequest $args
     * @return StopQueryExecutionResponse
     */
    public function stopQueryExecution(StopQueryExecutionRequest $args)
    {
        $result = parent::stopQueryExecution($args->toArray());
        return new StopQueryExecutionResponse($result->toArray());
    }
}
