<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords;

trait SearchPublicRecordsTrait
{
    /**
     * @param SearchPublicRecordsRequest $args
     * @return SearchPublicRecordsResponse
     */
    public function searchPublicRecords(SearchPublicRecordsRequest $args)
    {
        $result = parent::searchPublicRecords($args->toArray());
        return new SearchPublicRecordsResponse($result->toArray());
    }
}
