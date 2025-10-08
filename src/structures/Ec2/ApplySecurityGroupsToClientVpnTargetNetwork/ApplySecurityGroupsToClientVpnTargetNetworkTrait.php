<?php

namespace Sunaoka\Aws\Structures\Ec2\ApplySecurityGroupsToClientVpnTargetNetwork;

trait ApplySecurityGroupsToClientVpnTargetNetworkTrait
{
    /**
     * @param ApplySecurityGroupsToClientVpnTargetNetworkRequest $args
     * @return ApplySecurityGroupsToClientVpnTargetNetworkResponse
     */
    public function applySecurityGroupsToClientVpnTargetNetwork(
        ApplySecurityGroupsToClientVpnTargetNetworkRequest $args,
    ) {
        $result = parent::applySecurityGroupsToClientVpnTargetNetwork($args->toArray());
        return new ApplySecurityGroupsToClientVpnTargetNetworkResponse($result->toArray());
    }
}
