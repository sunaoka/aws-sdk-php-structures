<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateBacklogTask;

trait CreateBacklogTaskTrait
{
    /**
     * @param CreateBacklogTaskRequest $args
     * @return CreateBacklogTaskResponse
     */
    public function createBacklogTask(CreateBacklogTaskRequest $args)
    {
        $result = parent::createBacklogTask($args->toArray());
        return new CreateBacklogTaskResponse($result->toArray());
    }
}
