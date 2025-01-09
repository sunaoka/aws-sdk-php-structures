<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PLACE'|'BLUE_GREEN' $deploymentType
 * @property 'WITH_TRAFFIC_CONTROL'|'WITHOUT_TRAFFIC_CONTROL' $deploymentOption
 */
class DeploymentStyle extends Shape
{
    /**
     * @param array{
     *     deploymentType?: 'IN_PLACE'|'BLUE_GREEN',
     *     deploymentOption?: 'WITH_TRAFFIC_CONTROL'|'WITHOUT_TRAFFIC_CONTROL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
