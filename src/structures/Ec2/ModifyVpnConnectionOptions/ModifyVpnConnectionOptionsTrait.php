<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnectionOptions;

trait ModifyVpnConnectionOptionsTrait
{
    /**
     * @param ModifyVpnConnectionOptionsRequest $args
     * @return ModifyVpnConnectionOptionsResponse
     */
    public function modifyVpnConnectionOptions(ModifyVpnConnectionOptionsRequest $args)
    {
        $result = parent::modifyVpnConnectionOptions($args->toArray());
        return new ModifyVpnConnectionOptionsResponse($result->toArray());
    }
}
