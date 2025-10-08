<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask;

trait UpdateTaskTrait
{
    /**
     * @param UpdateTaskRequest $args
     * @return UpdateTaskResponse
     */
    public function updateTask(UpdateTaskRequest $args)
    {
        $result = parent::updateTask($args->toArray());
        return new UpdateTaskResponse($result->toArray());
    }
}
