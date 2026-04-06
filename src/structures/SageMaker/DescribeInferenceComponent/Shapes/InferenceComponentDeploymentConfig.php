<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceComponentRollingUpdatePolicy $RollingUpdatePolicy
 * @property AutoRollbackConfig|null $AutoRollbackConfiguration
 */
class InferenceComponentDeploymentConfig extends Shape
{
    /**
     * @param array{
     *     RollingUpdatePolicy: InferenceComponentRollingUpdatePolicy,
     *     AutoRollbackConfiguration?: AutoRollbackConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
