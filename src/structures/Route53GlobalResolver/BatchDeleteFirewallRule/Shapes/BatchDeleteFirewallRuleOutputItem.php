<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchDeleteFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchDeleteFirewallRuleResult $firewallRule
 * @property int $code
 * @property string|null $message
 */
class BatchDeleteFirewallRuleOutputItem extends Shape
{
    /**
     * @param array{
     *     firewallRule: BatchDeleteFirewallRuleResult,
     *     code: int,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
