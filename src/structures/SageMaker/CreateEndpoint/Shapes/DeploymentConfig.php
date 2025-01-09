<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlueGreenUpdatePolicy $BlueGreenUpdatePolicy
 * @property RollingUpdatePolicy $RollingUpdatePolicy
 * @property AutoRollbackConfig $AutoRollbackConfiguration
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     BlueGreenUpdatePolicy?: BlueGreenUpdatePolicy,
     *     RollingUpdatePolicy?: RollingUpdatePolicy,
     *     AutoRollbackConfiguration?: AutoRollbackConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
