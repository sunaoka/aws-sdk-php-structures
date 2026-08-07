<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord;

trait BatchGetDiscoverableRegistryRecordTrait
{
    /**
     * @param BatchGetDiscoverableRegistryRecordRequest $args
     * @return BatchGetDiscoverableRegistryRecordResponse
     */
    public function batchGetDiscoverableRegistryRecord(BatchGetDiscoverableRegistryRecordRequest $args)
    {
        $result = parent::batchGetDiscoverableRegistryRecord($args->toArray());
        return new BatchGetDiscoverableRegistryRecordResponse($result->toArray());
    }
}
