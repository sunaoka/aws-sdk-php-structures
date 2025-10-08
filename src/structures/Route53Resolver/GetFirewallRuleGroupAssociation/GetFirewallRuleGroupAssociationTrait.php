<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallRuleGroupAssociation;

trait GetFirewallRuleGroupAssociationTrait
{
    /**
     * @param GetFirewallRuleGroupAssociationRequest $args
     * @return GetFirewallRuleGroupAssociationResponse
     */
    public function getFirewallRuleGroupAssociation(GetFirewallRuleGroupAssociationRequest $args)
    {
        $result = parent::getFirewallRuleGroupAssociation($args->toArray());
        return new GetFirewallRuleGroupAssociationResponse($result->toArray());
    }
}
