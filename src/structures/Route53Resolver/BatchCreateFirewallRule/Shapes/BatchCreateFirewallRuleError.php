<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchCreateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateFirewallRuleEntry|null $FirewallRule
 * @property string|null $Code
 * @property string|null $Message
 */
class BatchCreateFirewallRuleError extends Shape
{
    /**
     * @param array{
     *     FirewallRule?: CreateFirewallRuleEntry|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
