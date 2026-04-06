<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string|null $InstanceType
 * @property string $AvailabilityZone
 * @property 'Pending'|'Pending:Wait'|'Pending:Proceed'|'Quarantined'|'InService'|'Terminating'|'Terminating:Wait'|'Terminating:Proceed'|'Terminated'|'Detaching'|'Detached'|'EnteringStandby'|'Standby'|'Warmed:Pending'|'Warmed:Pending:Wait'|'Warmed:Pending:Proceed'|'Warmed:Terminating'|'Warmed:Terminating:Wait'|'Warmed:Terminating:Proceed'|'Warmed:Terminated'|'Warmed:Stopped'|'Warmed:Running'|'Warmed:Hibernated' $LifecycleState
 * @property string $HealthStatus
 * @property string|null $LaunchConfigurationName
 * @property LaunchTemplateSpecification|null $LaunchTemplate
 * @property bool $ProtectedFromScaleIn
 * @property string|null $WeightedCapacity
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InstanceType?: string|null,
     *     AvailabilityZone: string,
     *     LifecycleState: 'Pending'|'Pending:Wait'|'Pending:Proceed'|'Quarantined'|'InService'|'Terminating'|'Terminating:Wait'|'Terminating:Proceed'|'Terminated'|'Detaching'|'Detached'|'EnteringStandby'|'Standby'|'Warmed:Pending'|'Warmed:Pending:Wait'|'Warmed:Pending:Proceed'|'Warmed:Terminating'|'Warmed:Terminating:Wait'|'Warmed:Terminating:Proceed'|'Warmed:Terminated'|'Warmed:Stopped'|'Warmed:Running'|'Warmed:Hibernated',
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
