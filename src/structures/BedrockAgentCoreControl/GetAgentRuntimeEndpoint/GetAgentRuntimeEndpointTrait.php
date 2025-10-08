<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntimeEndpoint;

trait GetAgentRuntimeEndpointTrait
{
    /**
     * @param GetAgentRuntimeEndpointRequest $args
     * @return GetAgentRuntimeEndpointResponse
     */
    public function getAgentRuntimeEndpoint(GetAgentRuntimeEndpointRequest $args)
    {
        $result = parent::getAgentRuntimeEndpoint($args->toArray());
        return new GetAgentRuntimeEndpointResponse($result->toArray());
    }
}
