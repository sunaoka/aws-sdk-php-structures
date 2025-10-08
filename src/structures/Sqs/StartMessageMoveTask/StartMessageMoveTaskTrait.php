<?php

namespace Sunaoka\Aws\Structures\Sqs\StartMessageMoveTask;

trait StartMessageMoveTaskTrait
{
    /**
     * @param StartMessageMoveTaskRequest $args
     * @return StartMessageMoveTaskResponse
     */
    public function startMessageMoveTask(StartMessageMoveTaskRequest $args)
    {
        $result = parent::startMessageMoveTask($args->toArray());
        return new StartMessageMoveTaskResponse($result->toArray());
    }
}
