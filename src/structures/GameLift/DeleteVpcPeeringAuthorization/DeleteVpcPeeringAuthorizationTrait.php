<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteVpcPeeringAuthorization;

trait DeleteVpcPeeringAuthorizationTrait
{
    /**
     * @param DeleteVpcPeeringAuthorizationRequest $args
     * @return DeleteVpcPeeringAuthorizationResponse
     */
    public function deleteVpcPeeringAuthorization(DeleteVpcPeeringAuthorizationRequest $args)
    {
        $result = parent::deleteVpcPeeringAuthorization($args->toArray());
        return new DeleteVpcPeeringAuthorizationResponse($result->toArray());
    }
}
