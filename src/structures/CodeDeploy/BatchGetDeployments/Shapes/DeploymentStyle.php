<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PLACE'|'BLUE_GREEN'|null $deploymentType
 * @property 'WITH_TRAFFIC_CONTROL'|'WITHOUT_TRAFFIC_CONTROL'|null $deploymentOption
 */
class DeploymentStyle extends Shape
{
    /**
     * @param array{
     *     deploymentType?: 'IN_PLACE'|'BLUE_GREEN'|null,
     *     deploymentOption?: 'WITH_TRAFFIC_CONTROL'|'WITHOUT_TRAFFIC_CONTROL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
