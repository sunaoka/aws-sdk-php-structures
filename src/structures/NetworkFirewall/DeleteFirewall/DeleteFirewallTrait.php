<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall;

trait DeleteFirewallTrait
{
    /**
     * @param DeleteFirewallRequest $args
     * @return DeleteFirewallResponse
     */
    public function deleteFirewall(DeleteFirewallRequest $args)
    {
        $result = parent::deleteFirewall($args->toArray());
        return new DeleteFirewallResponse($result->toArray());
    }
}
