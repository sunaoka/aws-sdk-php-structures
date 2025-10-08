<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnTunnelReplacementStatus;

trait GetVpnTunnelReplacementStatusTrait
{
    /**
     * @param GetVpnTunnelReplacementStatusRequest $args
     * @return GetVpnTunnelReplacementStatusResponse
     */
    public function getVpnTunnelReplacementStatus(GetVpnTunnelReplacementStatusRequest $args)
    {
        $result = parent::getVpnTunnelReplacementStatus($args->toArray());
        return new GetVpnTunnelReplacementStatusResponse($result->toArray());
    }
}
