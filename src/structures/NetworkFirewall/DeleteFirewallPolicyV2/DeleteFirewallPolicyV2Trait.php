<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewallPolicyV2;

trait DeleteFirewallPolicyV2Trait
{
    /**
     * @param DeleteFirewallPolicyV2Request $args
     * @return DeleteFirewallPolicyV2Response
     */
    public function deleteFirewallPolicyV2(DeleteFirewallPolicyV2Request $args)
    {
        $result = parent::deleteFirewallPolicyV2($args->toArray());
        return new DeleteFirewallPolicyV2Response($result->toArray());
    }
}
