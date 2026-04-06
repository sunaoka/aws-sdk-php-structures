<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetBacklogTask;

trait GetBacklogTaskTrait
{
    /**
     * @param GetBacklogTaskRequest $args
     * @return GetBacklogTaskResponse
     */
    public function getBacklogTask(GetBacklogTaskRequest $args)
    {
        $result = parent::getBacklogTask($args->toArray());
        return new GetBacklogTaskResponse($result->toArray());
    }
}
