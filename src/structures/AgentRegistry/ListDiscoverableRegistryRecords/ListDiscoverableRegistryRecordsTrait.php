<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\ListDiscoverableRegistryRecords;

trait ListDiscoverableRegistryRecordsTrait
{
    /**
     * @param ListDiscoverableRegistryRecordsRequest $args
     * @return ListDiscoverableRegistryRecordsResponse
     */
    public function listDiscoverableRegistryRecords(ListDiscoverableRegistryRecordsRequest $args)
    {
        $result = parent::listDiscoverableRegistryRecords($args->toArray());
        return new ListDiscoverableRegistryRecordsResponse($result->toArray());
    }
}
