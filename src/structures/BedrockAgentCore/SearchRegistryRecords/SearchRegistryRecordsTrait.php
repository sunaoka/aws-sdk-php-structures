<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SearchRegistryRecords;

trait SearchRegistryRecordsTrait
{
    /**
     * @param SearchRegistryRecordsRequest $args
     * @return SearchRegistryRecordsResponse
     */
    public function searchRegistryRecords(SearchRegistryRecordsRequest $args)
    {
        $result = parent::searchRegistryRecords($args->toArray());
        return new SearchRegistryRecordsResponse($result->toArray());
    }
}
