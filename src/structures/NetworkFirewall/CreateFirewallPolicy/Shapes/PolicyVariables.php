<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, IPSet>|null $RuleVariables
 */
class PolicyVariables extends Shape
{
    /**
     * @param array{RuleVariables?: array<string, IPSet>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
