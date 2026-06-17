<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarnessEndpoint;

trait DeleteHarnessEndpointTrait
{
    /**
     * @param DeleteHarnessEndpointRequest $args
     * @return DeleteHarnessEndpointResponse
     */
    public function deleteHarnessEndpoint(DeleteHarnessEndpointRequest $args)
    {
        $result = parent::deleteHarnessEndpoint($args->toArray());
        return new DeleteHarnessEndpointResponse($result->toArray());
    }
}
