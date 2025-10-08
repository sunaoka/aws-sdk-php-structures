<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRule;

trait CreateFirewallRuleTrait
{
    /**
     * @param CreateFirewallRuleRequest $args
     * @return CreateFirewallRuleResponse
     */
    public function createFirewallRule(CreateFirewallRuleRequest $args)
    {
        $result = parent::createFirewallRule($args->toArray());
        return new CreateFirewallRuleResponse($result->toArray());
    }
}
