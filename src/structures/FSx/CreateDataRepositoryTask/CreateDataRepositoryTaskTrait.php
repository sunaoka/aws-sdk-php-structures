<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask;

trait CreateDataRepositoryTaskTrait
{
    /**
     * @param CreateDataRepositoryTaskRequest $args
     * @return CreateDataRepositoryTaskResponse
     */
    public function createDataRepositoryTask(CreateDataRepositoryTaskRequest $args)
    {
        $result = parent::createDataRepositoryTask($args->toArray());
        return new CreateDataRepositoryTaskResponse($result->toArray());
    }
}
