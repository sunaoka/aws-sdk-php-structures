<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateClientVpnTargetNetwork;

trait DisassociateClientVpnTargetNetworkTrait
{
    /**
     * @param DisassociateClientVpnTargetNetworkRequest $args
     * @return DisassociateClientVpnTargetNetworkResponse
     */
    public function disassociateClientVpnTargetNetwork(DisassociateClientVpnTargetNetworkRequest $args)
    {
        $result = parent::disassociateClientVpnTargetNetwork($args->toArray());
        return new DisassociateClientVpnTargetNetworkResponse($result->toArray());
    }
}
