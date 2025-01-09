<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $AutoScalingGroupName
 * @property string $AvailabilityZone
 * @property string $LifecycleState
 * @property string $HealthStatus
 * @property string $LaunchConfigurationName
 * @property LaunchTemplateSpecification $LaunchTemplate
 * @property bool $ProtectedFromScaleIn
 * @property string $WeightedCapacity
 */
class AutoScalingInstanceDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InstanceType?: string,
     *     AutoScalingGroupName: string,
     *     AvailabilityZone: string,
     *     LifecycleState: string,
     *     HealthStatus: string,
     *     LaunchConfigurationName?: string,
     *     LaunchTemplate?: LaunchTemplateSpecification,
     *     ProtectedFromScaleIn: bool,
     *     WeightedCapacity?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
