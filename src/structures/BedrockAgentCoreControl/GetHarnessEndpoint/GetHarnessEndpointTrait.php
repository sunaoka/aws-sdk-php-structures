<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarnessEndpoint;

trait GetHarnessEndpointTrait
{
    /**
     * @param GetHarnessEndpointRequest $args
     * @return GetHarnessEndpointResponse
     */
    public function getHarnessEndpoint(GetHarnessEndpointRequest $args)
    {
        $result = parent::getHarnessEndpoint($args->toArray());
        return new GetHarnessEndpointResponse($result->toArray());
    }
}
