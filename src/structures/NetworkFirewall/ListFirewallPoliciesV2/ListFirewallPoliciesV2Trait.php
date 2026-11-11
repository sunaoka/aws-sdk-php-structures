<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewallPoliciesV2;

trait ListFirewallPoliciesV2Trait
{
    /**
     * @param ListFirewallPoliciesV2Request $args
     * @return ListFirewallPoliciesV2Response
     */
    public function listFirewallPoliciesV2(ListFirewallPoliciesV2Request $args)
    {
        $result = parent::listFirewallPoliciesV2($args->toArray());
        return new ListFirewallPoliciesV2Response($result->toArray());
    }
}
