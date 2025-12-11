<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteFirewallDomainList;

trait DeleteFirewallDomainListTrait
{
    /**
     * @param DeleteFirewallDomainListRequest $args
     * @return DeleteFirewallDomainListResponse
     */
    public function deleteFirewallDomainList(DeleteFirewallDomainListRequest $args)
    {
        $result = parent::deleteFirewallDomainList($args->toArray());
        return new DeleteFirewallDomainListResponse($result->toArray());
    }
}
