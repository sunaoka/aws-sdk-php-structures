<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $FirewallCreationConfig
 */
class FMSPolicyUpdateFirewallCreationConfigAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     FirewallCreationConfig?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
