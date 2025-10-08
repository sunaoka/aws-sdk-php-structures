<?php

namespace Sunaoka\Aws\Structures\Sqs\ListMessageMoveTasks;

trait ListMessageMoveTasksTrait
{
    /**
     * @param ListMessageMoveTasksRequest $args
     * @return ListMessageMoveTasksResponse
     */
    public function listMessageMoveTasks(ListMessageMoveTasksRequest $args)
    {
        $result = parent::listMessageMoveTasks($args->toArray());
        return new ListMessageMoveTasksResponse($result->toArray());
    }
}
