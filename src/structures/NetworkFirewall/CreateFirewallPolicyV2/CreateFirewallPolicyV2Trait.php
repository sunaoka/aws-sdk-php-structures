<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicyV2;

trait CreateFirewallPolicyV2Trait
{
    /**
     * @param CreateFirewallPolicyV2Request $args
     * @return CreateFirewallPolicyV2Response
     */
    public function createFirewallPolicyV2(CreateFirewallPolicyV2Request $args)
    {
        $result = parent::createFirewallPolicyV2($args->toArray());
        return new CreateFirewallPolicyV2Response($result->toArray());
    }
}
