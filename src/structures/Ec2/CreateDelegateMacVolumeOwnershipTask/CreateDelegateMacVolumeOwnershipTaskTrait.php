<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDelegateMacVolumeOwnershipTask;

trait CreateDelegateMacVolumeOwnershipTaskTrait
{
    /**
     * @param CreateDelegateMacVolumeOwnershipTaskRequest $args
     * @return CreateDelegateMacVolumeOwnershipTaskResponse
     */
    public function createDelegateMacVolumeOwnershipTask(CreateDelegateMacVolumeOwnershipTaskRequest $args)
    {
        $result = parent::createDelegateMacVolumeOwnershipTask($args->toArray());
        return new CreateDelegateMacVolumeOwnershipTaskResponse($result->toArray());
    }
}
