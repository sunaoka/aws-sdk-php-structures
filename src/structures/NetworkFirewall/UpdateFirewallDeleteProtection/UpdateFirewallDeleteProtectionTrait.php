<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallDeleteProtection;

trait UpdateFirewallDeleteProtectionTrait
{
    /**
     * @param UpdateFirewallDeleteProtectionRequest $args
     * @return UpdateFirewallDeleteProtectionResponse
     */
    public function updateFirewallDeleteProtection(UpdateFirewallDeleteProtectionRequest $args)
    {
        $result = parent::updateFirewallDeleteProtection($args->toArray());
        return new UpdateFirewallDeleteProtectionResponse($result->toArray());
    }
}
