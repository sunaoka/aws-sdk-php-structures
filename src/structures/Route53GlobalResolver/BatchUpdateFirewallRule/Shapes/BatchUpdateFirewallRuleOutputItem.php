<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchUpdateFirewallRuleResult $firewallRule
 * @property int $code
 * @property string|null $message
 */
class BatchUpdateFirewallRuleOutputItem extends Shape
{
    /**
     * @param array{
     *     firewallRule: BatchUpdateFirewallRuleResult,
     *     code: int,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
