<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetAppAuthorization;

trait GetAppAuthorizationTrait
{
    /**
     * @param GetAppAuthorizationRequest $args
     * @return GetAppAuthorizationResponse
     */
    public function getAppAuthorization(GetAppAuthorizationRequest $args)
    {
        $result = parent::getAppAuthorization($args->toArray());
        return new GetAppAuthorizationResponse($result->toArray());
    }
}
