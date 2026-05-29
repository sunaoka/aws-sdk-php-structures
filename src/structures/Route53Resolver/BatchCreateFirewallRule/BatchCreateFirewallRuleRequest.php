<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchCreateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CreateFirewallRuleEntry> $CreateFirewallRuleEntries
 */
class BatchCreateFirewallRuleRequest extends Request
{
    /**
     * @param array{CreateFirewallRuleEntries: list<Shapes\CreateFirewallRuleEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
