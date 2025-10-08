<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\StartDeviceAuthorization;

trait StartDeviceAuthorizationTrait
{
    /**
     * @param StartDeviceAuthorizationRequest $args
     * @return StartDeviceAuthorizationResponse
     */
    public function startDeviceAuthorization(StartDeviceAuthorizationRequest $args)
    {
        $result = parent::startDeviceAuthorization($args->toArray());
        return new StartDeviceAuthorizationResponse($result->toArray());
    }
}
