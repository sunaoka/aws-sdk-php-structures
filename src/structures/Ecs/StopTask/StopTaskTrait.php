<?php

namespace Sunaoka\Aws\Structures\Ecs\StopTask;

trait StopTaskTrait
{
    /**
     * @param StopTaskRequest $args
     * @return StopTaskResponse
     */
    public function stopTask(StopTaskRequest $args)
    {
        $result = parent::stopTask($args->toArray());
        return new StopTaskResponse($result->toArray());
    }
}
