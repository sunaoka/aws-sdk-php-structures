<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords;

trait SearchDiscoverableRegistryRecordsTrait
{
    /**
     * @param SearchDiscoverableRegistryRecordsRequest $args
     * @return SearchDiscoverableRegistryRecordsResponse
     */
    public function searchDiscoverableRegistryRecords(SearchDiscoverableRegistryRecordsRequest $args)
    {
        $result = parent::searchDiscoverableRegistryRecords($args->toArray());
        return new SearchDiscoverableRegistryRecordsResponse($result->toArray());
    }
}
