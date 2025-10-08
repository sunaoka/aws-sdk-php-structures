<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveryAssociations;

trait DescribeIpamResourceDiscoveryAssociationsTrait
{
    /**
     * @param DescribeIpamResourceDiscoveryAssociationsRequest $args
     * @return DescribeIpamResourceDiscoveryAssociationsResponse
     */
    public function describeIpamResourceDiscoveryAssociations(DescribeIpamResourceDiscoveryAssociationsRequest $args)
    {
        $result = parent::describeIpamResourceDiscoveryAssociations($args->toArray());
        return new DescribeIpamResourceDiscoveryAssociationsResponse($result->toArray());
    }
}
