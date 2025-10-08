<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateVpcEndpointAssociation;

trait CreateVpcEndpointAssociationTrait
{
    /**
     * @param CreateVpcEndpointAssociationRequest $args
     * @return CreateVpcEndpointAssociationResponse
     */
    public function createVpcEndpointAssociation(CreateVpcEndpointAssociationRequest $args)
    {
        $result = parent::createVpcEndpointAssociation($args->toArray());
        return new CreateVpcEndpointAssociationResponse($result->toArray());
    }
}
