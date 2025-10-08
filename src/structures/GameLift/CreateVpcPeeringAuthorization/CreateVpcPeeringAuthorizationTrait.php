<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateVpcPeeringAuthorization;

trait CreateVpcPeeringAuthorizationTrait
{
    /**
     * @param CreateVpcPeeringAuthorizationRequest $args
     * @return CreateVpcPeeringAuthorizationResponse
     */
    public function createVpcPeeringAuthorization(CreateVpcPeeringAuthorizationRequest $args)
    {
        $result = parent::createVpcPeeringAuthorization($args->toArray());
        return new CreateVpcPeeringAuthorizationResponse($result->toArray());
    }
}
