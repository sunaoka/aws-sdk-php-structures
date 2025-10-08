<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig;

trait CreateEndpointConfigTrait
{
    /**
     * @param CreateEndpointConfigRequest $args
     * @return CreateEndpointConfigResponse
     */
    public function createEndpointConfig(CreateEndpointConfigRequest $args)
    {
        $result = parent::createEndpointConfig($args->toArray());
        return new CreateEndpointConfigResponse($result->toArray());
    }
}
