<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnTargetNetworks;

trait DescribeClientVpnTargetNetworksTrait
{
    /**
     * @param DescribeClientVpnTargetNetworksRequest $args
     * @return DescribeClientVpnTargetNetworksResponse
     */
    public function describeClientVpnTargetNetworks(DescribeClientVpnTargetNetworksRequest $args)
    {
        $result = parent::describeClientVpnTargetNetworks($args->toArray());
        return new DescribeClientVpnTargetNetworksResponse($result->toArray());
    }
}
