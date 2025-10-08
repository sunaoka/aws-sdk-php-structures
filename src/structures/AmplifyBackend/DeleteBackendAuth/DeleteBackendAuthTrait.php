<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendAuth;

trait DeleteBackendAuthTrait
{
    /**
     * @param DeleteBackendAuthRequest $args
     * @return DeleteBackendAuthResponse
     */
    public function deleteBackendAuth(DeleteBackendAuthRequest $args)
    {
        $result = parent::deleteBackendAuth($args->toArray());
        return new DeleteBackendAuthResponse($result->toArray());
    }
}
