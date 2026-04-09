<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListRegistryRecords;

trait ListRegistryRecordsTrait
{
    /**
     * @param ListRegistryRecordsRequest $args
     * @return ListRegistryRecordsResponse
     */
    public function listRegistryRecords(ListRegistryRecordsRequest $args)
    {
        $result = parent::listRegistryRecords($args->toArray());
        return new ListRegistryRecordsResponse($result->toArray());
    }
}
