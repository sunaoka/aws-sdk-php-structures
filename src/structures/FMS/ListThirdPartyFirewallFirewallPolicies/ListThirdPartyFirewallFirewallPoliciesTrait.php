<?php

namespace Sunaoka\Aws\Structures\FMS\ListThirdPartyFirewallFirewallPolicies;

trait ListThirdPartyFirewallFirewallPoliciesTrait
{
    /**
     * @param ListThirdPartyFirewallFirewallPoliciesRequest $args
     * @return ListThirdPartyFirewallFirewallPoliciesResponse
     */
    public function listThirdPartyFirewallFirewallPolicies(ListThirdPartyFirewallFirewallPoliciesRequest $args)
    {
        $result = parent::listThirdPartyFirewallFirewallPolicies($args->toArray());
        return new ListThirdPartyFirewallFirewallPoliciesResponse($result->toArray());
    }
}
