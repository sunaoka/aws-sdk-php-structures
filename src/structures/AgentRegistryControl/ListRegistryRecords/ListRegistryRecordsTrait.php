<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistryRecords;

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
