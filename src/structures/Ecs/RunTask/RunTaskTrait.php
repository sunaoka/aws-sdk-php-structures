<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask;

trait RunTaskTrait
{
    /**
     * @param RunTaskRequest $args
     * @return RunTaskResponse
     */
    public function runTask(RunTaskRequest $args)
    {
        $result = parent::runTask($args->toArray());
        return new RunTaskResponse($result->toArray());
    }
}
