<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchDeleteFirewallRule;

trait BatchDeleteFirewallRuleTrait
{
    /**
     * @param BatchDeleteFirewallRuleRequest $args
     * @return BatchDeleteFirewallRuleResponse
     */
    public function batchDeleteFirewallRule(BatchDeleteFirewallRuleRequest $args)
    {
        $result = parent::batchDeleteFirewallRule($args->toArray());
        return new BatchDeleteFirewallRuleResponse($result->toArray());
    }
}
