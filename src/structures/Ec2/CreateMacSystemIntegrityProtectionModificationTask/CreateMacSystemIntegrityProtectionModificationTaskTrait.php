<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateMacSystemIntegrityProtectionModificationTask;

trait CreateMacSystemIntegrityProtectionModificationTaskTrait
{
    /**
     * @param CreateMacSystemIntegrityProtectionModificationTaskRequest $args
     * @return CreateMacSystemIntegrityProtectionModificationTaskResponse
     */
    public function createMacSystemIntegrityProtectionModificationTask(CreateMacSystemIntegrityProtectionModificationTaskRequest $args)
    {
        $result = parent::createMacSystemIntegrityProtectionModificationTask($args->toArray());
        return new CreateMacSystemIntegrityProtectionModificationTaskResponse($result->toArray());
    }
}
