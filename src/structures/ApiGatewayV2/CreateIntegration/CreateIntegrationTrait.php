<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateIntegration;

trait CreateIntegrationTrait
{
    /**
     * @param CreateIntegrationRequest $args
     * @return CreateIntegrationResponse
     */
    public function createIntegration(CreateIntegrationRequest $args)
    {
        $result = parent::createIntegration($args->toArray());
        return new CreateIntegrationResponse($result->toArray());
    }
}
