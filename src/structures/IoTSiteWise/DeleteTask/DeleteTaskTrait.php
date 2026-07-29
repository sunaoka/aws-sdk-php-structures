<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteTask;

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
