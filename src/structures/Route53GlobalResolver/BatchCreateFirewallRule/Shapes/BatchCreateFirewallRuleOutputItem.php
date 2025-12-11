<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchCreateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchCreateFirewallRuleResult $firewallRule
 * @property int $code
 * @property string|null $message
 */
class BatchCreateFirewallRuleOutputItem extends Shape
{
    /**
     * @param array{
     *     firewallRule: BatchCreateFirewallRuleResult,
     *     code: int,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
