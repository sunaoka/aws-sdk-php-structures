<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntimeEndpoint;

trait UpdateAgentRuntimeEndpointTrait
{
    /**
     * @param UpdateAgentRuntimeEndpointRequest $args
     * @return UpdateAgentRuntimeEndpointResponse
     */
    public function updateAgentRuntimeEndpoint(UpdateAgentRuntimeEndpointRequest $args)
    {
        $result = parent::updateAgentRuntimeEndpoint($args->toArray());
        return new UpdateAgentRuntimeEndpointResponse($result->toArray());
    }
}
