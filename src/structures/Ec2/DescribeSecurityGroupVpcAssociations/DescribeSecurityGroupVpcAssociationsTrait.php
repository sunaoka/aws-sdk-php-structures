<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupVpcAssociations;

trait DescribeSecurityGroupVpcAssociationsTrait
{
    /**
     * @param DescribeSecurityGroupVpcAssociationsRequest $args
     * @return DescribeSecurityGroupVpcAssociationsResponse
     */
    public function describeSecurityGroupVpcAssociations(DescribeSecurityGroupVpcAssociationsRequest $args)
    {
        $result = parent::describeSecurityGroupVpcAssociations($args->toArray());
        return new DescribeSecurityGroupVpcAssociationsResponse($result->toArray());
    }
}
