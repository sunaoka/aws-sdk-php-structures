<?php

namespace Sunaoka\Aws\Structures\Lambda\ResumeDurableExecution;

trait ResumeDurableExecutionTrait
{
    /**
     * @param ResumeDurableExecutionRequest $args
     * @return ResumeDurableExecutionResponse
     */
    public function resumeDurableExecution(ResumeDurableExecutionRequest $args)
    {
        $result = parent::resumeDurableExecution($args->toArray());
        return new ResumeDurableExecutionResponse($result->toArray());
    }
}
