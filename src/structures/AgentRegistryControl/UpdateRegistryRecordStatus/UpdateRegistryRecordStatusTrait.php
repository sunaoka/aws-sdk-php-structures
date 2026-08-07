<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecordStatus;

trait UpdateRegistryRecordStatusTrait
{
    /**
     * @param UpdateRegistryRecordStatusRequest $args
     * @return UpdateRegistryRecordStatusResponse
     */
    public function updateRegistryRecordStatus(UpdateRegistryRecordStatusRequest $args)
    {
        $result = parent::updateRegistryRecordStatus($args->toArray());
        return new UpdateRegistryRecordStatusResponse($result->toArray());
    }
}
