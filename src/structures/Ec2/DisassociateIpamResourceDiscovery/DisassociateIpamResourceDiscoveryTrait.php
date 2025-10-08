<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateIpamResourceDiscovery;

trait DisassociateIpamResourceDiscoveryTrait
{
    /**
     * @param DisassociateIpamResourceDiscoveryRequest $args
     * @return DisassociateIpamResourceDiscoveryResponse
     */
    public function disassociateIpamResourceDiscovery(DisassociateIpamResourceDiscoveryRequest $args)
    {
        $result = parent::disassociateIpamResourceDiscovery($args->toArray());
        return new DisassociateIpamResourceDiscoveryResponse($result->toArray());
    }
}
