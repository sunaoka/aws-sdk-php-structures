<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetTask;

trait BatchGetTaskTrait
{
    /**
     * @param BatchGetTaskRequest $args
     * @return BatchGetTaskResponse
     */
    public function batchGetTask(BatchGetTaskRequest $args)
    {
        $result = parent::batchGetTask($args->toArray());
        return new BatchGetTaskResponse($result->toArray());
    }
}
