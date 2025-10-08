<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StopDataCollectionByAgentIds;

trait StopDataCollectionByAgentIdsTrait
{
    /**
     * @param StopDataCollectionByAgentIdsRequest $args
     * @return StopDataCollectionByAgentIdsResponse
     */
    public function stopDataCollectionByAgentIds(StopDataCollectionByAgentIdsRequest $args)
    {
        $result = parent::stopDataCollectionByAgentIds($args->toArray());
        return new StopDataCollectionByAgentIdsResponse($result->toArray());
    }
}
