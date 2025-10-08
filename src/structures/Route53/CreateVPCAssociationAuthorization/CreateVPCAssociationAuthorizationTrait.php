<?php

namespace Sunaoka\Aws\Structures\Route53\CreateVPCAssociationAuthorization;

trait CreateVPCAssociationAuthorizationTrait
{
    /**
     * @param CreateVPCAssociationAuthorizationRequest $args
     * @return CreateVPCAssociationAuthorizationResponse
     */
    public function createVPCAssociationAuthorization(CreateVPCAssociationAuthorizationRequest $args)
    {
        $result = parent::createVPCAssociationAuthorization($args->toArray());
        return new CreateVPCAssociationAuthorizationResponse($result->toArray());
    }
}
