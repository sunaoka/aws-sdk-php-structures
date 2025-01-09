<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, IPSet> $RuleVariables
 */
class PolicyVariables extends Shape
{
    /**
     * @param array{RuleVariables?: array<string, IPSet>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
