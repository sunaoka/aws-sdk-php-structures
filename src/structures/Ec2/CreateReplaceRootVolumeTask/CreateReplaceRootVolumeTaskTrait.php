<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReplaceRootVolumeTask;

trait CreateReplaceRootVolumeTaskTrait
{
    /**
     * @param CreateReplaceRootVolumeTaskRequest $args
     * @return CreateReplaceRootVolumeTaskResponse
     */
    public function createReplaceRootVolumeTask(CreateReplaceRootVolumeTaskRequest $args)
    {
        $result = parent::createReplaceRootVolumeTask($args->toArray());
        return new CreateReplaceRootVolumeTaskResponse($result->toArray());
    }
}
