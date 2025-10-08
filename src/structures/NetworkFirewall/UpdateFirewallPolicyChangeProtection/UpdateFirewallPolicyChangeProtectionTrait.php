<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyChangeProtection;

trait UpdateFirewallPolicyChangeProtectionTrait
{
    /**
     * @param UpdateFirewallPolicyChangeProtectionRequest $args
     * @return UpdateFirewallPolicyChangeProtectionResponse
     */
    public function updateFirewallPolicyChangeProtection(UpdateFirewallPolicyChangeProtectionRequest $args)
    {
        $result = parent::updateFirewallPolicyChangeProtection($args->toArray());
        return new UpdateFirewallPolicyChangeProtectionResponse($result->toArray());
    }
}
