<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask;

trait CreateTaskTrait
{
    /**
     * @param CreateTaskRequest $args
     * @return CreateTaskResponse
     */
    public function createTask(CreateTaskRequest $args)
    {
        $result = parent::createTask($args->toArray());
        return new CreateTaskResponse($result->toArray());
    }
}
