<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRestoreImageTask;

trait CreateRestoreImageTaskTrait
{
    /**
     * @param CreateRestoreImageTaskRequest $args
     * @return CreateRestoreImageTaskResponse
     */
    public function createRestoreImageTask(CreateRestoreImageTaskRequest $args)
    {
        $result = parent::createRestoreImageTask($args->toArray());
        return new CreateRestoreImageTaskResponse($result->toArray());
    }
}
