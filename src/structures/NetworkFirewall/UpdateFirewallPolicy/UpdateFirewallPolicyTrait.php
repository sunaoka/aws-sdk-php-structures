<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy;

trait UpdateFirewallPolicyTrait
{
    /**
     * @param UpdateFirewallPolicyRequest $args
     * @return UpdateFirewallPolicyResponse
     */
    public function updateFirewallPolicy(UpdateFirewallPolicyRequest $args)
    {
        $result = parent::updateFirewallPolicy($args->toArray());
        return new UpdateFirewallPolicyResponse($result->toArray());
    }
}
