<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRules;

trait ListFirewallRulesTrait
{
    /**
     * @param ListFirewallRulesRequest $args
     * @return ListFirewallRulesResponse
     */
    public function listFirewallRules(ListFirewallRulesRequest $args)
    {
        $result = parent::listFirewallRules($args->toArray());
        return new ListFirewallRulesResponse($result->toArray());
    }
}
