<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISCOVER_EXISTING'|'COPY_AUTO_SCALING_GROUP' $action
 */
class GreenFleetProvisioningOption extends Shape
{
    /**
     * @param array{action?: 'DISCOVER_EXISTING'|'COPY_AUTO_SCALING_GROUP'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
