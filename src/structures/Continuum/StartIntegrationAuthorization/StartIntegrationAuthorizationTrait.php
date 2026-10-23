<?php

namespace Sunaoka\Aws\Structures\Continuum\StartIntegrationAuthorization;

trait StartIntegrationAuthorizationTrait
{
    /**
     * @param StartIntegrationAuthorizationRequest $args
     * @return StartIntegrationAuthorizationResponse
     */
    public function startIntegrationAuthorization(StartIntegrationAuthorizationRequest $args)
    {
        $result = parent::startIntegrationAuthorization($args->toArray());
        return new StartIntegrationAuthorizationResponse($result->toArray());
    }
}
