<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlueGreenUpdatePolicy|null $BlueGreenUpdatePolicy
 * @property AutoRollbackConfig|null $AutoRollbackConfiguration
 * @property RollingUpdatePolicy|null $RollingUpdatePolicy
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     BlueGreenUpdatePolicy?: BlueGreenUpdatePolicy|null,
     *     AutoRollbackConfiguration?: AutoRollbackConfig|null,
     *     RollingUpdatePolicy?: RollingUpdatePolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
