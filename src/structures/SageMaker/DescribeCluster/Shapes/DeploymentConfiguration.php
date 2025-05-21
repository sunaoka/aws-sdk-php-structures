<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RollingDeploymentPolicy|null $RollingUpdatePolicy
 * @property int<0, 3600>|null $WaitIntervalInSeconds
 * @property list<AlarmDetails>|null $AutoRollbackConfiguration
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     RollingUpdatePolicy?: RollingDeploymentPolicy|null,
     *     WaitIntervalInSeconds?: int<0, 3600>|null,
     *     AutoRollbackConfiguration?: list<AlarmDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
