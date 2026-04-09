<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord;

trait UpdateRegistryRecordTrait
{
    /**
     * @param UpdateRegistryRecordRequest $args
     * @return UpdateRegistryRecordResponse
     */
    public function updateRegistryRecord(UpdateRegistryRecordRequest $args)
    {
        $result = parent::updateRegistryRecord($args->toArray());
        return new UpdateRegistryRecordResponse($result->toArray());
    }
}
