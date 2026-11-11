<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyV2;

trait UpdateFirewallPolicyV2Trait
{
    /**
     * @param UpdateFirewallPolicyV2Request $args
     * @return UpdateFirewallPolicyV2Response
     */
    public function updateFirewallPolicyV2(UpdateFirewallPolicyV2Request $args)
    {
        $result = parent::updateFirewallPolicyV2($args->toArray());
        return new UpdateFirewallPolicyV2Response($result->toArray());
    }
}
