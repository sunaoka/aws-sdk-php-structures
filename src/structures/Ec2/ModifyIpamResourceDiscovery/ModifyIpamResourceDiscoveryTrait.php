<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceDiscovery;

trait ModifyIpamResourceDiscoveryTrait
{
    /**
     * @param ModifyIpamResourceDiscoveryRequest $args
     * @return ModifyIpamResourceDiscoveryResponse
     */
    public function modifyIpamResourceDiscovery(ModifyIpamResourceDiscoveryRequest $args)
    {
        $result = parent::modifyIpamResourceDiscovery($args->toArray());
        return new ModifyIpamResourceDiscoveryResponse($result->toArray());
    }
}
