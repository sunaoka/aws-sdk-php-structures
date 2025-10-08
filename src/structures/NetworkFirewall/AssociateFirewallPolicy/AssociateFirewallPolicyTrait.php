<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateFirewallPolicy;

trait AssociateFirewallPolicyTrait
{
    /**
     * @param AssociateFirewallPolicyRequest $args
     * @return AssociateFirewallPolicyResponse
     */
    public function associateFirewallPolicy(AssociateFirewallPolicyRequest $args)
    {
        $result = parent::associateFirewallPolicy($args->toArray());
        return new AssociateFirewallPolicyResponse($result->toArray());
    }
}
