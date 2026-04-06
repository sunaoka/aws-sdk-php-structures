<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetManagedFirewallDomainList;

trait GetManagedFirewallDomainListTrait
{
    /**
     * @param GetManagedFirewallDomainListRequest $args
     * @return GetManagedFirewallDomainListResponse
     */
    public function getManagedFirewallDomainList(GetManagedFirewallDomainListRequest $args)
    {
        $result = parent::getManagedFirewallDomainList($args->toArray());
        return new GetManagedFirewallDomainListResponse($result->toArray());
    }
}
