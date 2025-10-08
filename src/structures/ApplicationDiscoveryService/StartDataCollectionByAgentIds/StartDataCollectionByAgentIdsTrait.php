<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartDataCollectionByAgentIds;

trait StartDataCollectionByAgentIdsTrait
{
    /**
     * @param StartDataCollectionByAgentIdsRequest $args
     * @return StartDataCollectionByAgentIdsResponse
     */
    public function startDataCollectionByAgentIds(StartDataCollectionByAgentIdsRequest $args)
    {
        $result = parent::startDataCollectionByAgentIds($args->toArray());
        return new StartDataCollectionByAgentIdsResponse($result->toArray());
    }
}
