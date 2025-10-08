<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleGroups;

trait ListFirewallRuleGroupsTrait
{
    /**
     * @param ListFirewallRuleGroupsRequest $args
     * @return ListFirewallRuleGroupsResponse
     */
    public function listFirewallRuleGroups(ListFirewallRuleGroupsRequest $args)
    {
        $result = parent::listFirewallRuleGroups($args->toArray());
        return new ListFirewallRuleGroupsResponse($result->toArray());
    }
}
