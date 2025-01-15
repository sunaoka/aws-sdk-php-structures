<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, IPSet>|null $IPSets
 * @property array<string, PortSet>|null $PortSets
 */
class RuleVariables extends Shape
{
    /**
     * @param array{
     *     IPSets?: array<string, IPSet>|null,
     *     PortSets?: array<string, PortSet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
