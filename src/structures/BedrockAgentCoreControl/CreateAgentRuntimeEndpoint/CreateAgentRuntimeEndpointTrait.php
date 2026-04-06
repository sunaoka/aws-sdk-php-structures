<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntimeEndpoint;

trait CreateAgentRuntimeEndpointTrait
{
    /**
     * @param CreateAgentRuntimeEndpointRequest $args
     * @return CreateAgentRuntimeEndpointResponse
     */
    public function createAgentRuntimeEndpoint(CreateAgentRuntimeEndpointRequest $args)
    {
        $result = parent::createAgentRuntimeEndpoint($args->toArray());
        return new CreateAgentRuntimeEndpointResponse($result->toArray());
    }
}
