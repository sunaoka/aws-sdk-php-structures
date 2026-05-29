<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchDeleteFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DeleteFirewallRuleEntry> $DeleteFirewallRuleEntries
 */
class BatchDeleteFirewallRuleRequest extends Request
{
    /**
     * @param array{DeleteFirewallRuleEntries: list<Shapes\DeleteFirewallRuleEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
