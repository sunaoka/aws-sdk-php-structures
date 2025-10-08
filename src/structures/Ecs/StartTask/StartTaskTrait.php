<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask;

trait StartTaskTrait
{
    /**
     * @param StartTaskRequest $args
     * @return StartTaskResponse
     */
    public function startTask(StartTaskRequest $args)
    {
        $result = parent::startTask($args->toArray());
        return new StartTaskResponse($result->toArray());
    }
}
