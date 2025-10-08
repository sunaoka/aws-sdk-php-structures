<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallDomainList;

trait GetFirewallDomainListTrait
{
    /**
     * @param GetFirewallDomainListRequest $args
     * @return GetFirewallDomainListResponse
     */
    public function getFirewallDomainList(GetFirewallDomainListRequest $args)
    {
        $result = parent::getFirewallDomainList($args->toArray());
        return new GetFirewallDomainListResponse($result->toArray());
    }
}
