<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListManagedFirewallDomainLists;

trait ListManagedFirewallDomainListsTrait
{
    /**
     * @param ListManagedFirewallDomainListsRequest $args
     * @return ListManagedFirewallDomainListsResponse
     */
    public function listManagedFirewallDomainLists(ListManagedFirewallDomainListsRequest $args)
    {
        $result = parent::listManagedFirewallDomainLists($args->toArray());
        return new ListManagedFirewallDomainListsResponse($result->toArray());
    }
}
