<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateBacklogTask;

trait UpdateBacklogTaskTrait
{
    /**
     * @param UpdateBacklogTaskRequest $args
     * @return UpdateBacklogTaskResponse
     */
    public function updateBacklogTask(UpdateBacklogTaskRequest $args)
    {
        $result = parent::updateBacklogTask($args->toArray());
        return new UpdateBacklogTaskResponse($result->toArray());
    }
}
