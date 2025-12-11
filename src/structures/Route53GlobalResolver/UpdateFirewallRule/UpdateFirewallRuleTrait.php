<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateFirewallRule;

trait UpdateFirewallRuleTrait
{
    /**
     * @param UpdateFirewallRuleRequest $args
     * @return UpdateFirewallRuleResponse
     */
    public function updateFirewallRule(UpdateFirewallRuleRequest $args)
    {
        $result = parent::updateFirewallRule($args->toArray());
        return new UpdateFirewallRuleResponse($result->toArray());
    }
}
