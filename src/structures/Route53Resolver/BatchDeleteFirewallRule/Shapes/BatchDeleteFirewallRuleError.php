<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchDeleteFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeleteFirewallRuleEntry|null $FirewallRule
 * @property string|null $Code
 * @property string|null $Message
 */
class BatchDeleteFirewallRuleError extends Shape
{
    /**
     * @param array{
     *     FirewallRule?: DeleteFirewallRuleEntry|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
