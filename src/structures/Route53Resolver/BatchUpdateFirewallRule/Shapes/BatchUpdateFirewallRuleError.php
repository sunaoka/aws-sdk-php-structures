<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateFirewallRuleEntry|null $FirewallRule
 * @property string|null $Code
 * @property string|null $Message
 */
class BatchUpdateFirewallRuleError extends Shape
{
    /**
     * @param array{
     *     FirewallRule?: UpdateFirewallRuleEntry|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
