<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord;

trait GetRegistryRecordTrait
{
    /**
     * @param GetRegistryRecordRequest $args
     * @return GetRegistryRecordResponse
     */
    public function getRegistryRecord(GetRegistryRecordRequest $args)
    {
        $result = parent::getRegistryRecord($args->toArray());
        return new GetRegistryRecordResponse($result->toArray());
    }
}
