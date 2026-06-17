<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarnessEndpoint;

trait CreateHarnessEndpointTrait
{
    /**
     * @param CreateHarnessEndpointRequest $args
     * @return CreateHarnessEndpointResponse
     */
    public function createHarnessEndpoint(CreateHarnessEndpointRequest $args)
    {
        $result = parent::createHarnessEndpoint($args->toArray());
        return new CreateHarnessEndpointResponse($result->toArray());
    }
}
