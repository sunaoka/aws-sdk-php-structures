<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleGroupAssociations;

trait ListFirewallRuleGroupAssociationsTrait
{
    /**
     * @param ListFirewallRuleGroupAssociationsRequest $args
     * @return ListFirewallRuleGroupAssociationsResponse
     */
    public function listFirewallRuleGroupAssociations(ListFirewallRuleGroupAssociationsRequest $args)
    {
        $result = parent::listFirewallRuleGroupAssociations($args->toArray());
        return new ListFirewallRuleGroupAssociationsResponse($result->toArray());
    }
}
