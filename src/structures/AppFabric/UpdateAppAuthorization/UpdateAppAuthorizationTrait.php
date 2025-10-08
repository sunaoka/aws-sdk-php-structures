<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateAppAuthorization;

trait UpdateAppAuthorizationTrait
{
    /**
     * @param UpdateAppAuthorizationRequest $args
     * @return UpdateAppAuthorizationResponse
     */
    public function updateAppAuthorization(UpdateAppAuthorizationRequest $args)
    {
        $result = parent::updateAppAuthorization($args->toArray());
        return new UpdateAppAuthorizationResponse($result->toArray());
    }
}
