<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetFirewallDomainList;

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
