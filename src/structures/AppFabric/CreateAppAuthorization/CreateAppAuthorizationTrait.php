<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppAuthorization;

trait CreateAppAuthorizationTrait
{
    /**
     * @param CreateAppAuthorizationRequest $args
     * @return CreateAppAuthorizationResponse
     */
    public function createAppAuthorization(CreateAppAuthorizationRequest $args)
    {
        $result = parent::createAppAuthorization($args->toArray());
        return new CreateAppAuthorizationResponse($result->toArray());
    }
}
