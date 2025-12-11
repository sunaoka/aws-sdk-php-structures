<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallDomains;

trait ListFirewallDomainsTrait
{
    /**
     * @param ListFirewallDomainsRequest $args
     * @return ListFirewallDomainsResponse
     */
    public function listFirewallDomains(ListFirewallDomainsRequest $args)
    {
        $result = parent::listFirewallDomains($args->toArray());
        return new ListFirewallDomainsResponse($result->toArray());
    }
}
