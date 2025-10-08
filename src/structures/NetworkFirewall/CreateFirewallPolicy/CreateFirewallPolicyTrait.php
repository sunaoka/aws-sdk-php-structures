<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy;

trait CreateFirewallPolicyTrait
{
    /**
     * @param CreateFirewallPolicyRequest $args
     * @return CreateFirewallPolicyResponse
     */
    public function createFirewallPolicy(CreateFirewallPolicyRequest $args)
    {
        $result = parent::createFirewallPolicy($args->toArray());
        return new CreateFirewallPolicyResponse($result->toArray());
    }
}
