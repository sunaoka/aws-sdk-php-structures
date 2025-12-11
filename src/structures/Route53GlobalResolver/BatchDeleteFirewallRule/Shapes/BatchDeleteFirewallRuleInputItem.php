<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchDeleteFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $firewallRuleId
 */
class BatchDeleteFirewallRuleInputItem extends Shape
{
    /**
     * @param array{firewallRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
