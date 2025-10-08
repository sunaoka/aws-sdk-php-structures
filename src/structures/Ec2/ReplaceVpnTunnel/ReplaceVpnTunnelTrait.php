<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceVpnTunnel;

trait ReplaceVpnTunnelTrait
{
    /**
     * @param ReplaceVpnTunnelRequest $args
     * @return ReplaceVpnTunnelResponse
     */
    public function replaceVpnTunnel(ReplaceVpnTunnelRequest $args)
    {
        $result = parent::replaceVpnTunnel($args->toArray());
        return new ReplaceVpnTunnelResponse($result->toArray());
    }
}
