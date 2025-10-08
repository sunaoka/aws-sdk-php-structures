<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallConfig;

trait UpdateFirewallConfigTrait
{
    /**
     * @param UpdateFirewallConfigRequest $args
     * @return UpdateFirewallConfigResponse
     */
    public function updateFirewallConfig(UpdateFirewallConfigRequest $args)
    {
        $result = parent::updateFirewallConfig($args->toArray());
        return new UpdateFirewallConfigResponse($result->toArray());
    }
}
