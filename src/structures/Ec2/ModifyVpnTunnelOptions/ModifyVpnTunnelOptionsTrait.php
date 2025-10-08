<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions;

trait ModifyVpnTunnelOptionsTrait
{
    /**
     * @param ModifyVpnTunnelOptionsRequest $args
     * @return ModifyVpnTunnelOptionsResponse
     */
    public function modifyVpnTunnelOptions(ModifyVpnTunnelOptionsRequest $args)
    {
        $result = parent::modifyVpnTunnelOptions($args->toArray());
        return new ModifyVpnTunnelOptionsResponse($result->toArray());
    }
}
