<?php

namespace Sunaoka\Aws\Structures\Ec2\GetActiveVpnTunnelStatus;

trait GetActiveVpnTunnelStatusTrait
{
    /**
     * @param GetActiveVpnTunnelStatusRequest $args
     * @return GetActiveVpnTunnelStatusResponse
     */
    public function getActiveVpnTunnelStatus(GetActiveVpnTunnelStatusRequest $args)
    {
        $result = parent::getActiveVpnTunnelStatus($args->toArray());
        return new GetActiveVpnTunnelStatusResponse($result->toArray());
    }
}
