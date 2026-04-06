<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteVpcEndpointAssociation;

trait DeleteVpcEndpointAssociationTrait
{
    /**
     * @param DeleteVpcEndpointAssociationRequest $args
     * @return DeleteVpcEndpointAssociationResponse
     */
    public function deleteVpcEndpointAssociation(DeleteVpcEndpointAssociationRequest $args)
    {
        $result = parent::deleteVpcEndpointAssociation($args->toArray());
        return new DeleteVpcEndpointAssociationResponse($result->toArray());
    }
}
