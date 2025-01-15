<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlueGreenUpdatePolicy|null $BlueGreenUpdatePolicy
 * @property RollingUpdatePolicy|null $RollingUpdatePolicy
 * @property AutoRollbackConfig|null $AutoRollbackConfiguration
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     BlueGreenUpdatePolicy?: BlueGreenUpdatePolicy|null,
     *     RollingUpdatePolicy?: RollingUpdatePolicy|null,
     *     AutoRollbackConfiguration?: AutoRollbackConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
