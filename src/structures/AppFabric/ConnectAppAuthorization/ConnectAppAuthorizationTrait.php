<?php

namespace Sunaoka\Aws\Structures\AppFabric\ConnectAppAuthorization;

trait ConnectAppAuthorizationTrait
{
    /**
     * @param ConnectAppAuthorizationRequest $args
     * @return ConnectAppAuthorizationResponse
     */
    public function connectAppAuthorization(ConnectAppAuthorizationRequest $args)
    {
        $result = parent::connectAppAuthorization($args->toArray());
        return new ConnectAppAuthorizationResponse($result->toArray());
    }
}
