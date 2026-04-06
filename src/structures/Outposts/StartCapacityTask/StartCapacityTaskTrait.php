<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask;

trait StartCapacityTaskTrait
{
    /**
     * @param StartCapacityTaskRequest $args
     * @return StartCapacityTaskResponse
     */
    public function startCapacityTask(StartCapacityTaskRequest $args)
    {
        $result = parent::startCapacityTask($args->toArray());
        return new StartCapacityTaskResponse($result->toArray());
    }
}
