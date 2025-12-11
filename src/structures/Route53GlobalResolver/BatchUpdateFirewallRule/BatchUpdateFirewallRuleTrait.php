<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchUpdateFirewallRule;

trait BatchUpdateFirewallRuleTrait
{
    /**
     * @param BatchUpdateFirewallRuleRequest $args
     * @return BatchUpdateFirewallRuleResponse
     */
    public function batchUpdateFirewallRule(BatchUpdateFirewallRuleRequest $args)
    {
        $result = parent::batchUpdateFirewallRule($args->toArray());
        return new BatchUpdateFirewallRuleResponse($result->toArray());
    }
}
