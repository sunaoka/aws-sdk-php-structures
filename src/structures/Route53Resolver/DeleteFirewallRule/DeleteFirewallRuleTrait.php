<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRule;

trait DeleteFirewallRuleTrait
{
    /**
     * @param DeleteFirewallRuleRequest $args
     * @return DeleteFirewallRuleResponse
     */
    public function deleteFirewallRule(DeleteFirewallRuleRequest $args)
    {
        $result = parent::deleteFirewallRule($args->toArray());
        return new DeleteFirewallRuleResponse($result->toArray());
    }
}
