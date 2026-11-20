<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleDomains;

trait ListFirewallRuleDomainsTrait
{
    /**
     * @param ListFirewallRuleDomainsRequest $args
     * @return ListFirewallRuleDomainsResponse
     */
    public function listFirewallRuleDomains(ListFirewallRuleDomainsRequest $args)
    {
        $result = parent::listFirewallRuleDomains($args->toArray());
        return new ListFirewallRuleDomainsResponse($result->toArray());
    }
}
