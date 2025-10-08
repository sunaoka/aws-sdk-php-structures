<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewallPolicy;

trait DeleteFirewallPolicyTrait
{
    /**
     * @param DeleteFirewallPolicyRequest $args
     * @return DeleteFirewallPolicyResponse
     */
    public function deleteFirewallPolicy(DeleteFirewallPolicyRequest $args)
    {
        $result = parent::deleteFirewallPolicy($args->toArray());
        return new DeleteFirewallPolicyResponse($result->toArray());
    }
}
