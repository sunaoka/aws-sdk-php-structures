<?php

namespace Sunaoka\Aws\Structures\DataSync\CancelTaskExecution;

trait CancelTaskExecutionTrait
{
    /**
     * @param CancelTaskExecutionRequest $args
     * @return CancelTaskExecutionResponse
     */
    public function cancelTaskExecution(CancelTaskExecutionRequest $args)
    {
        $result = parent::cancelTaskExecution($args->toArray());
        return new CancelTaskExecutionResponse($result->toArray());
    }
}
