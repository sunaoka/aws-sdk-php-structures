<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredResourceCidrs;

trait GetIpamDiscoveredResourceCidrsTrait
{
    /**
     * @param GetIpamDiscoveredResourceCidrsRequest $args
     * @return GetIpamDiscoveredResourceCidrsResponse
     */
    public function getIpamDiscoveredResourceCidrs(GetIpamDiscoveredResourceCidrsRequest $args)
    {
        $result = parent::getIpamDiscoveredResourceCidrs($args->toArray());
        return new GetIpamDiscoveredResourceCidrsResponse($result->toArray());
    }
}
