<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamInternetRegistryAssociations;

trait DescribeIpamInternetRegistryAssociationsTrait
{
    /**
     * @param DescribeIpamInternetRegistryAssociationsRequest $args
     * @return DescribeIpamInternetRegistryAssociationsResponse
     */
    public function describeIpamInternetRegistryAssociations(DescribeIpamInternetRegistryAssociationsRequest $args)
    {
        $result = parent::describeIpamInternetRegistryAssociations($args->toArray());
        return new DescribeIpamInternetRegistryAssociationsResponse($result->toArray());
    }
}
