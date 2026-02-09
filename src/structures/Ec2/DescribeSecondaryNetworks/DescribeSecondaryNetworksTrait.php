<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecondaryNetworks;

trait DescribeSecondaryNetworksTrait
{
    /**
     * @param DescribeSecondaryNetworksRequest $args
     * @return DescribeSecondaryNetworksResponse
     */
    public function describeSecondaryNetworks(DescribeSecondaryNetworksRequest $args)
    {
        $result = parent::describeSecondaryNetworks($args->toArray());
        return new DescribeSecondaryNetworksResponse($result->toArray());
    }
}
