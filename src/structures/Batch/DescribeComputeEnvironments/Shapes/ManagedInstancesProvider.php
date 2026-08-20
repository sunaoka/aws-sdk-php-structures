<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $propagateTags
 * @property string $infrastructureRoleArn
 * @property InstanceLaunchTemplate $instanceLaunchTemplate
 * @property InfrastructureOptimization|null $infrastructureOptimization
 */
class ManagedInstancesProvider extends Shape
{
    /**
     * @param array{
     *     propagateTags?: string|null,
     *     infrastructureRoleArn: string,
     *     instanceLaunchTemplate: InstanceLaunchTemplate,
     *     infrastructureOptimization?: InfrastructureOptimization|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
