<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegration;

trait GetIntegrationTrait
{
    /**
     * @param GetIntegrationRequest $args
     * @return GetIntegrationResponse
     */
    public function getIntegration(GetIntegrationRequest $args)
    {
        $result = parent::getIntegration($args->toArray());
        return new GetIntegrationResponse($result->toArray());
    }
}
