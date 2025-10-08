<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrations;

trait GetIntegrationsTrait
{
    /**
     * @param GetIntegrationsRequest $args
     * @return GetIntegrationsResponse
     */
    public function getIntegrations(GetIntegrationsRequest $args)
    {
        $result = parent::getIntegrations($args->toArray());
        return new GetIntegrationsResponse($result->toArray());
    }
}
