<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntimeEndpoint;

trait DeleteAgentRuntimeEndpointTrait
{
    /**
     * @param DeleteAgentRuntimeEndpointRequest $args
     * @return DeleteAgentRuntimeEndpointResponse
     */
    public function deleteAgentRuntimeEndpoint(DeleteAgentRuntimeEndpointRequest $args)
    {
        $result = parent::deleteAgentRuntimeEndpoint($args->toArray());
        return new DeleteAgentRuntimeEndpointResponse($result->toArray());
    }
}
