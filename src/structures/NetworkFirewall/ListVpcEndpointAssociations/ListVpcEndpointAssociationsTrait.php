<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListVpcEndpointAssociations;

trait ListVpcEndpointAssociationsTrait
{
    /**
     * @param ListVpcEndpointAssociationsRequest $args
     * @return ListVpcEndpointAssociationsResponse
     */
    public function listVpcEndpointAssociations(ListVpcEndpointAssociationsRequest $args)
    {
        $result = parent::listVpcEndpointAssociations($args->toArray());
        return new ListVpcEndpointAssociationsResponse($result->toArray());
    }
}
