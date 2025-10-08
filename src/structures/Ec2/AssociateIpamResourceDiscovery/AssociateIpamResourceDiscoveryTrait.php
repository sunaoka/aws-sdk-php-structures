<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIpamResourceDiscovery;

trait AssociateIpamResourceDiscoveryTrait
{
    /**
     * @param AssociateIpamResourceDiscoveryRequest $args
     * @return AssociateIpamResourceDiscoveryResponse
     */
    public function associateIpamResourceDiscovery(AssociateIpamResourceDiscoveryRequest $args)
    {
        $result = parent::associateIpamResourceDiscovery($args->toArray());
        return new AssociateIpamResourceDiscoveryResponse($result->toArray());
    }
}
