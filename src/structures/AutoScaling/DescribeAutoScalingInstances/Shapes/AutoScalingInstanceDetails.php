<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string|null $InstanceType
 * @property string $AutoScalingGroupName
 * @property string $AvailabilityZone
 * @property string $LifecycleState
 * @property string $HealthStatus
 * @property string|null $LaunchConfigurationName
 * @property LaunchTemplateSpecification|null $LaunchTemplate
 * @property bool $ProtectedFromScaleIn
 * @property string|null $WeightedCapacity
 */
class AutoScalingInstanceDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InstanceType?: string|null,
     *     AutoScalingGroupName: string,
     *     AvailabilityZone: string,
     *     LifecycleState: string,
     *     HealthStatus: string,
     *     LaunchConfigurationName?: string|null,
     *     LaunchTemplate?: LaunchTemplateSpecification|null,
     *     ProtectedFromScaleIn: bool,
     *     WeightedCapacity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
