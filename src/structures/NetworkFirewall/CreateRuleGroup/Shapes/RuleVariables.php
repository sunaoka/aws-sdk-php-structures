<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, IPSet> $IPSets
 * @property array<string, PortSet> $PortSets
 */
class RuleVariables extends Shape
{
    /**
     * @param array{
     *     IPSets?: array<string, IPSet>,
     *     PortSets?: array<string, PortSet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
