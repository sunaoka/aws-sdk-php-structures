<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchDeleteFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchDeleteFirewallRuleInputItem> $firewallRules
 */
class BatchDeleteFirewallRuleRequest extends Request
{
    /**
     * @param array{firewallRules: list<Shapes\BatchDeleteFirewallRuleInputItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
