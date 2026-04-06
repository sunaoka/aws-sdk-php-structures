<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallDomainLists;

trait ListFirewallDomainListsTrait
{
    /**
     * @param ListFirewallDomainListsRequest $args
     * @return ListFirewallDomainListsResponse
     */
    public function listFirewallDomainLists(ListFirewallDomainListsRequest $args)
    {
        $result = parent::listFirewallDomainLists($args->toArray());
        return new ListFirewallDomainListsResponse($result->toArray());
    }
}
