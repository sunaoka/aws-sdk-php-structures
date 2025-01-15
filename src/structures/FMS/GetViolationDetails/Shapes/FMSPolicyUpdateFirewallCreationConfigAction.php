<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $FirewallCreationConfig
 */
class FMSPolicyUpdateFirewallCreationConfigAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     FirewallCreationConfig?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
