<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetFirewallRule;

trait GetFirewallRuleTrait
{
    /**
     * @param GetFirewallRuleRequest $args
     * @return GetFirewallRuleResponse
     */
    public function getFirewallRule(GetFirewallRuleRequest $args)
    {
        $result = parent::getFirewallRule($args->toArray());
        return new GetFirewallRuleResponse($result->toArray());
    }
}
