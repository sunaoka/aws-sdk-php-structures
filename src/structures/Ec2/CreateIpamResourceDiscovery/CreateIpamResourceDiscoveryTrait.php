<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamResourceDiscovery;

trait CreateIpamResourceDiscoveryTrait
{
    /**
     * @param CreateIpamResourceDiscoveryRequest $args
     * @return CreateIpamResourceDiscoveryResponse
     */
    public function createIpamResourceDiscovery(CreateIpamResourceDiscoveryRequest $args)
    {
        $result = parent::createIpamResourceDiscovery($args->toArray());
        return new CreateIpamResourceDiscoveryResponse($result->toArray());
    }
}
