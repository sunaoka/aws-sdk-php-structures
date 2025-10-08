<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteVPCAssociationAuthorization;

trait DeleteVPCAssociationAuthorizationTrait
{
    /**
     * @param DeleteVPCAssociationAuthorizationRequest $args
     * @return DeleteVPCAssociationAuthorizationResponse
     */
    public function deleteVPCAssociationAuthorization(DeleteVPCAssociationAuthorizationRequest $args)
    {
        $result = parent::deleteVPCAssociationAuthorization($args->toArray());
        return new DeleteVPCAssociationAuthorizationResponse($result->toArray());
    }
}
