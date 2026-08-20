<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $propagateTags
 * @property string|null $infrastructureRoleArn
 * @property InstanceLaunchTemplateUpdate|null $instanceLaunchTemplate
 * @property InfrastructureOptimization|null $infrastructureOptimization
 */
class UpdateManagedInstancesProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     propagateTags?: string|null,
     *     infrastructureRoleArn?: string|null,
     *     instanceLaunchTemplate?: InstanceLaunchTemplateUpdate|null,
     *     infrastructureOptimization?: InfrastructureOptimization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
