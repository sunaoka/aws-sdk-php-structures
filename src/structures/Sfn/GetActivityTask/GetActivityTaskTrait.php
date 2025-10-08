<?php

namespace Sunaoka\Aws\Structures\Sfn\GetActivityTask;

trait GetActivityTaskTrait
{
    /**
     * @param GetActivityTaskRequest $args
     * @return GetActivityTaskResponse
     */
    public function getActivityTask(GetActivityTaskRequest $args)
    {
        $result = parent::getActivityTask($args->toArray());
        return new GetActivityTaskResponse($result->toArray());
    }
}
