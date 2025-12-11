<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchUpdateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchUpdateFirewallRuleInputItem> $firewallRules
 */
class BatchUpdateFirewallRuleRequest extends Request
{
    /**
     * @param array{firewallRules: list<Shapes\BatchUpdateFirewallRuleInputItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
