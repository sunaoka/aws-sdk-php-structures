<?php

namespace Sunaoka\Aws\Structures\Sqs\CancelMessageMoveTask;

trait CancelMessageMoveTaskTrait
{
    /**
     * @param CancelMessageMoveTaskRequest $args
     * @return CancelMessageMoveTaskResponse
     */
    public function cancelMessageMoveTask(CancelMessageMoveTaskRequest $args)
    {
        $result = parent::cancelMessageMoveTask($args->toArray());
        return new CancelMessageMoveTaskResponse($result->toArray());
    }
}
