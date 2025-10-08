<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateStoreImageTask;

trait CreateStoreImageTaskTrait
{
    /**
     * @param CreateStoreImageTaskRequest $args
     * @return CreateStoreImageTaskResponse
     */
    public function createStoreImageTask(CreateStoreImageTaskRequest $args)
    {
        $result = parent::createStoreImageTask($args->toArray());
        return new CreateStoreImageTaskResponse($result->toArray());
    }
}
