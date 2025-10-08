<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallConfigs;

trait ListFirewallConfigsTrait
{
    /**
     * @param ListFirewallConfigsRequest $args
     * @return ListFirewallConfigsResponse
     */
    public function listFirewallConfigs(ListFirewallConfigsRequest $args)
    {
        $result = parent::listFirewallConfigs($args->toArray());
        return new ListFirewallConfigsResponse($result->toArray());
    }
}
