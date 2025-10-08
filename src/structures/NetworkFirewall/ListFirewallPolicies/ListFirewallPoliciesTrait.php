<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewallPolicies;

trait ListFirewallPoliciesTrait
{
    /**
     * @param ListFirewallPoliciesRequest $args
     * @return ListFirewallPoliciesResponse
     */
    public function listFirewallPolicies(ListFirewallPoliciesRequest $args)
    {
        $result = parent::listFirewallPolicies($args->toArray());
        return new ListFirewallPoliciesResponse($result->toArray());
    }
}
