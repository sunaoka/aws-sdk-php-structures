<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ScheduledInstancesBlockDeviceMapping> $BlockDeviceMappings
 * @property bool $EbsOptimized
 * @property ScheduledInstancesIamInstanceProfile $IamInstanceProfile
 * @property string $ImageId
 * @property string $InstanceType
 * @property string $KernelId
 * @property string $KeyName
 * @property ScheduledInstancesMonitoring $Monitoring
 * @property list<ScheduledInstancesNetworkInterface> $NetworkInterfaces
 * @property ScheduledInstancesPlacement $Placement
 * @property string $RamdiskId
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 * @property string $UserData
 */
class ScheduledInstancesLaunchSpecification extends Shape
{
    /**
     * @param array{
     *     BlockDeviceMappings?: list<ScheduledInstancesBlockDeviceMapping>,
     *     EbsOptimized?: bool,
     *     IamInstanceProfile?: ScheduledInstancesIamInstanceProfile,
     *     ImageId: string,
     *     InstanceType?: string,
     *     KernelId?: string,
     *     KeyName?: string,
     *     Monitoring?: ScheduledInstancesMonitoring,
     *     NetworkInterfaces?: list<ScheduledInstancesNetworkInterface>,
     *     Placement?: ScheduledInstancesPlacement,
     *     RamdiskId?: string,
     *     SecurityGroupIds?: list<string>,
     *     SubnetId?: string,
     *     UserData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
