<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateClientVpnTargetNetwork;

trait AssociateClientVpnTargetNetworkTrait
{
    /**
     * @param AssociateClientVpnTargetNetworkRequest $args
     * @return AssociateClientVpnTargetNetworkResponse
     */
    public function associateClientVpnTargetNetwork(AssociateClientVpnTargetNetworkRequest $args)
    {
        $result = parent::associateClientVpnTargetNetwork($args->toArray());
        return new AssociateClientVpnTargetNetworkResponse($result->toArray());
    }
}
