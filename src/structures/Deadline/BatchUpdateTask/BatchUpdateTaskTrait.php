<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchUpdateTask;

trait BatchUpdateTaskTrait
{
    /**
     * @param BatchUpdateTaskRequest $args
     * @return BatchUpdateTaskResponse
     */
    public function batchUpdateTask(BatchUpdateTaskRequest $args)
    {
        $result = parent::batchUpdateTask($args->toArray());
        return new BatchUpdateTaskResponse($result->toArray());
    }
}
