<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks;

trait DescribeSourceNetworksTrait
{
    /**
     * @param DescribeSourceNetworksRequest $args
     * @return DescribeSourceNetworksResponse
     */
    public function describeSourceNetworks(DescribeSourceNetworksRequest $args)
    {
        $result = parent::describeSourceNetworks($args->toArray());
        return new DescribeSourceNetworksResponse($result->toArray());
    }
}
