<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchCreateFirewallRule;

trait BatchCreateFirewallRuleTrait
{
    /**
     * @param BatchCreateFirewallRuleRequest $args
     * @return BatchCreateFirewallRuleResponse
     */
    public function batchCreateFirewallRule(BatchCreateFirewallRuleRequest $args)
    {
        $result = parent::batchCreateFirewallRule($args->toArray());
        return new BatchCreateFirewallRuleResponse($result->toArray());
    }
}
