<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleTypes;

trait ListFirewallRuleTypesTrait
{
    /**
     * @param ListFirewallRuleTypesRequest $args
     * @return ListFirewallRuleTypesResponse
     */
    public function listFirewallRuleTypes(ListFirewallRuleTypesRequest $args)
    {
        $result = parent::listFirewallRuleTypes($args->toArray());
        return new ListFirewallRuleTypesResponse($result->toArray());
    }
}
