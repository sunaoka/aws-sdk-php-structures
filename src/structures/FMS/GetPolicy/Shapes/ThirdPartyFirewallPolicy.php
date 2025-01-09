<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTRALIZED'|'DISTRIBUTED' $FirewallDeploymentModel
 */
class ThirdPartyFirewallPolicy extends Shape
{
    /**
     * @param array{FirewallDeploymentModel?: 'CENTRALIZED'|'DISTRIBUTED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
