<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamResourceDiscovery;

trait DeleteIpamResourceDiscoveryTrait
{
    /**
     * @param DeleteIpamResourceDiscoveryRequest $args
     * @return DeleteIpamResourceDiscoveryResponse
     */
    public function deleteIpamResourceDiscovery(DeleteIpamResourceDiscoveryRequest $args)
    {
        $result = parent::deleteIpamResourceDiscovery($args->toArray());
        return new DeleteIpamResourceDiscoveryResponse($result->toArray());
    }
}
