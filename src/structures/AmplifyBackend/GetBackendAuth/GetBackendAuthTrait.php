<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth;

trait GetBackendAuthTrait
{
    /**
     * @param GetBackendAuthRequest $args
     * @return GetBackendAuthResponse
     */
    public function getBackendAuth(GetBackendAuthRequest $args)
    {
        $result = parent::getBackendAuth($args->toArray());
        return new GetBackendAuthResponse($result->toArray());
    }
}
