<?php

namespace Sunaoka\Aws\Structures\Connect\StopTestCaseExecution;

trait StopTestCaseExecutionTrait
{
    /**
     * @param StopTestCaseExecutionRequest $args
     * @return StopTestCaseExecutionResponse
     */
    public function stopTestCaseExecution(StopTestCaseExecutionRequest $args)
    {
        $result = parent::stopTestCaseExecution($args->toArray());
        return new StopTestCaseExecutionResponse($result->toArray());
    }
}
