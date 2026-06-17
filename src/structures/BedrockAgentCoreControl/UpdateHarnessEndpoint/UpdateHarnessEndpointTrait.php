<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarnessEndpoint;

trait UpdateHarnessEndpointTrait
{
    /**
     * @param UpdateHarnessEndpointRequest $args
     * @return UpdateHarnessEndpointResponse
     */
    public function updateHarnessEndpoint(UpdateHarnessEndpointRequest $args)
    {
        $result = parent::updateHarnessEndpoint($args->toArray());
        return new UpdateHarnessEndpointResponse($result->toArray());
    }
}
