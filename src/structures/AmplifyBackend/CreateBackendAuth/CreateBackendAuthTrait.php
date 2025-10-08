<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth;

trait CreateBackendAuthTrait
{
    /**
     * @param CreateBackendAuthRequest $args
     * @return CreateBackendAuthResponse
     */
    public function createBackendAuth(CreateBackendAuthRequest $args)
    {
        $result = parent::createBackendAuth($args->toArray());
        return new CreateBackendAuthResponse($result->toArray());
    }
}
