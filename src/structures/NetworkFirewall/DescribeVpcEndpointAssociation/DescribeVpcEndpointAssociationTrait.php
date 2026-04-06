<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeVpcEndpointAssociation;

trait DescribeVpcEndpointAssociationTrait
{
    /**
     * @param DescribeVpcEndpointAssociationRequest $args
     * @return DescribeVpcEndpointAssociationResponse
     */
    public function describeVpcEndpointAssociation(DescribeVpcEndpointAssociationRequest $args)
    {
        $result = parent::describeVpcEndpointAssociation($args->toArray());
        return new DescribeVpcEndpointAssociationResponse($result->toArray());
    }
}
