<?php

namespace Sunaoka\Aws\Structures\Connect\StartTestCaseExecution;

trait StartTestCaseExecutionTrait
{
    /**
     * @param StartTestCaseExecutionRequest $args
     * @return StartTestCaseExecutionResponse
     */
    public function startTestCaseExecution(StartTestCaseExecutionRequest $args)
    {
        $result = parent::startTestCaseExecution($args->toArray());
        return new StartTestCaseExecutionResponse($result->toArray());
    }
}
