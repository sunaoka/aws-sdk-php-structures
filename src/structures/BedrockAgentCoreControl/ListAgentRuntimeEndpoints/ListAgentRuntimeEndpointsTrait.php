<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeEndpoints;

trait ListAgentRuntimeEndpointsTrait
{
    /**
     * @param ListAgentRuntimeEndpointsRequest $args
     * @return ListAgentRuntimeEndpointsResponse
     */
    public function listAgentRuntimeEndpoints(ListAgentRuntimeEndpointsRequest $args)
    {
        $result = parent::listAgentRuntimeEndpoints($args->toArray());
        return new ListAgentRuntimeEndpointsResponse($result->toArray());
    }
}
