<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth;

trait UpdateBackendAuthTrait
{
    /**
     * @param UpdateBackendAuthRequest $args
     * @return UpdateBackendAuthResponse
     */
    public function updateBackendAuth(UpdateBackendAuthRequest $args)
    {
        $result = parent::updateBackendAuth($args->toArray());
        return new UpdateBackendAuthResponse($result->toArray());
    }
}
