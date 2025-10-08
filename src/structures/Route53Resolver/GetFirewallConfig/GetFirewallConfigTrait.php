<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallConfig;

trait GetFirewallConfigTrait
{
    /**
     * @param GetFirewallConfigRequest $args
     * @return GetFirewallConfigResponse
     */
    public function getFirewallConfig(GetFirewallConfigRequest $args)
    {
        $result = parent::getFirewallConfig($args->toArray());
        return new GetFirewallConfigResponse($result->toArray());
    }
}
