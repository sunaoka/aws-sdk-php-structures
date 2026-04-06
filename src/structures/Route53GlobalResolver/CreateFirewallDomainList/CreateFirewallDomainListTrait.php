<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateFirewallDomainList;

trait CreateFirewallDomainListTrait
{
    /**
     * @param CreateFirewallDomainListRequest $args
     * @return CreateFirewallDomainListResponse
     */
    public function createFirewallDomainList(CreateFirewallDomainListRequest $args)
    {
        $result = parent::createFirewallDomainList($args->toArray());
        return new CreateFirewallDomainListResponse($result->toArray());
    }
}
