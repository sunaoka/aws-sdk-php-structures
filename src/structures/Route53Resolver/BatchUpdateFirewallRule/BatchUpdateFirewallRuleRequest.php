<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchUpdateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateFirewallRuleEntry> $UpdateFirewallRuleEntries
 */
class BatchUpdateFirewallRuleRequest extends Request
{
    /**
     * @param array{UpdateFirewallRuleEntries: list<Shapes\UpdateFirewallRuleEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
