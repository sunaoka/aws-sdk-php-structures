<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask;

trait GetCapacityTaskTrait
{
    /**
     * @param GetCapacityTaskRequest $args
     * @return GetCapacityTaskResponse
     */
    public function getCapacityTask(GetCapacityTaskRequest $args)
    {
        $result = parent::getCapacityTask($args->toArray());
        return new GetCapacityTaskResponse($result->toArray());
    }
}
