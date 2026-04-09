<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistryRecord;

trait CreateRegistryRecordTrait
{
    /**
     * @param CreateRegistryRecordRequest $args
     * @return CreateRegistryRecordResponse
     */
    public function createRegistryRecord(CreateRegistryRecordRequest $args)
    {
        $result = parent::createRegistryRecord($args->toArray());
        return new CreateRegistryRecordResponse($result->toArray());
    }
}
