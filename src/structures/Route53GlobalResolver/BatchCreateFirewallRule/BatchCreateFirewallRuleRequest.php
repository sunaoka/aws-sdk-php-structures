<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchCreateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchCreateFirewallRuleInputItem> $firewallRules
 */
class BatchCreateFirewallRuleRequest extends Request
{
    /**
     * @param array{firewallRules: list<Shapes\BatchCreateFirewallRuleInputItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
