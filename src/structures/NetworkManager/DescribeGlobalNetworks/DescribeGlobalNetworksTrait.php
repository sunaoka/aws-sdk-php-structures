<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DescribeGlobalNetworks;

trait DescribeGlobalNetworksTrait
{
    /**
     * @param DescribeGlobalNetworksRequest $args
     * @return DescribeGlobalNetworksResponse
     */
    public function describeGlobalNetworks(DescribeGlobalNetworksRequest $args)
    {
        $result = parent::describeGlobalNetworks($args->toArray());
        return new DescribeGlobalNetworksResponse($result->toArray());
    }
}
