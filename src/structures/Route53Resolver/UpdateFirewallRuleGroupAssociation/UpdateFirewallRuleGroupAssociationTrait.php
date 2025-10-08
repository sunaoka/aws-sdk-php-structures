<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallRuleGroupAssociation;

trait UpdateFirewallRuleGroupAssociationTrait
{
    /**
     * @param UpdateFirewallRuleGroupAssociationRequest $args
     * @return UpdateFirewallRuleGroupAssociationResponse
     */
    public function updateFirewallRuleGroupAssociation(UpdateFirewallRuleGroupAssociationRequest $args)
    {
        $result = parent::updateFirewallRuleGroupAssociation($args->toArray());
        return new UpdateFirewallRuleGroupAssociationResponse($result->toArray());
    }
}
