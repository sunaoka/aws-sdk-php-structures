<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointAssociations;

trait DescribeVpcEndpointAssociationsTrait
{
    /**
     * @param DescribeVpcEndpointAssociationsRequest $args
     * @return DescribeVpcEndpointAssociationsResponse
     */
    public function describeVpcEndpointAssociations(DescribeVpcEndpointAssociationsRequest $args)
    {
        $result = parent::describeVpcEndpointAssociations($args->toArray());
        return new DescribeVpcEndpointAssociationsResponse($result->toArray());
    }
}
