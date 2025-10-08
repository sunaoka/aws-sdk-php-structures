<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallDomains;

trait UpdateFirewallDomainsTrait
{
    /**
     * @param UpdateFirewallDomainsRequest $args
     * @return UpdateFirewallDomainsResponse
     */
    public function updateFirewallDomains(UpdateFirewallDomainsRequest $args)
    {
        $result = parent::updateFirewallDomains($args->toArray());
        return new UpdateFirewallDomainsResponse($result->toArray());
    }
}
