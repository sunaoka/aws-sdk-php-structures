<?php

namespace Sunaoka\Aws\Structures\Deadline\GetTask;

trait GetTaskTrait
{
    /**
     * @param GetTaskRequest $args
     * @return GetTaskResponse
     */
    public function getTask(GetTaskRequest $args)
    {
        $result = parent::getTask($args->toArray());
        return new GetTaskResponse($result->toArray());
    }
}
