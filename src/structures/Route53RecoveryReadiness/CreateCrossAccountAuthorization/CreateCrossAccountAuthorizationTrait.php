<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateCrossAccountAuthorization;

trait CreateCrossAccountAuthorizationTrait
{
    /**
     * @param CreateCrossAccountAuthorizationRequest $args
     * @return CreateCrossAccountAuthorizationResponse
     */
    public function createCrossAccountAuthorization(CreateCrossAccountAuthorizationRequest $args)
    {
        $result = parent::createCrossAccountAuthorization($args->toArray());
        return new CreateCrossAccountAuthorizationResponse($result->toArray());
    }
}
