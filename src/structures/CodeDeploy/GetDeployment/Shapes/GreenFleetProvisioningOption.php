<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISCOVER_EXISTING'|'COPY_AUTO_SCALING_GROUP'|null $action
 */
class GreenFleetProvisioningOption extends Shape
{
    /**
     * @param array{action?: 'DISCOVER_EXISTING'|'COPY_AUTO_SCALING_GROUP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
