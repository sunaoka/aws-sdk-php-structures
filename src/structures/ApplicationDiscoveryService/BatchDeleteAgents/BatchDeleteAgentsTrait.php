<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteAgents;

trait BatchDeleteAgentsTrait
{
    /**
     * @param BatchDeleteAgentsRequest $args
     * @return BatchDeleteAgentsResponse
     */
    public function batchDeleteAgents(BatchDeleteAgentsRequest $args)
    {
        $result = parent::batchDeleteAgents($args->toArray());
        return new BatchDeleteAgentsResponse($result->toArray());
    }
}
