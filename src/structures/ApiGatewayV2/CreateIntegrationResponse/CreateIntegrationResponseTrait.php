<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateIntegrationResponse;

trait CreateIntegrationResponseTrait
{
    /**
     * @param CreateIntegrationResponseRequest $args
     * @return CreateIntegrationResponseResponse
     */
    public function createIntegrationResponse(CreateIntegrationResponseRequest $args)
    {
        $result = parent::createIntegrationResponse($args->toArray());
        return new CreateIntegrationResponseResponse($result->toArray());
    }
}
