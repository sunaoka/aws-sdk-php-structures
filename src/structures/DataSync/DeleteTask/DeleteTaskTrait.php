<?php

namespace Sunaoka\Aws\Structures\DataSync\DeleteTask;

trait DeleteTaskTrait
{
    /**
     * @param DeleteTaskRequest $args
     * @return DeleteTaskResponse
     */
    public function deleteTask(DeleteTaskRequest $args)
    {
        $result = parent::deleteTask($args->toArray());
        return new DeleteTaskResponse($result->toArray());
    }
}
