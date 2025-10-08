<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTaskExecution;

trait UpdateTaskExecutionTrait
{
    /**
     * @param UpdateTaskExecutionRequest $args
     * @return UpdateTaskExecutionResponse
     */
    public function updateTaskExecution(UpdateTaskExecutionRequest $args)
    {
        $result = parent::updateTaskExecution($args->toArray());
        return new UpdateTaskExecutionResponse($result->toArray());
    }
}
