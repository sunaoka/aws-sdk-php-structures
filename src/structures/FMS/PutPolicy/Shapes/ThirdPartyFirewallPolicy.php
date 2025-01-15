<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTRALIZED'|'DISTRIBUTED'|null $FirewallDeploymentModel
 */
class ThirdPartyFirewallPolicy extends Shape
{
    /**
     * @param array{FirewallDeploymentModel?: 'CENTRALIZED'|'DISTRIBUTED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
