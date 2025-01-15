<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ScheduledInstancesBlockDeviceMapping>|null $BlockDeviceMappings
 * @property bool|null $EbsOptimized
 * @property ScheduledInstancesIamInstanceProfile|null $IamInstanceProfile
 * @property string $ImageId
 * @property string|null $InstanceType
 * @property string|null $KernelId
 * @property string|null $KeyName
 * @property ScheduledInstancesMonitoring|null $Monitoring
 * @property list<ScheduledInstancesNetworkInterface>|null $NetworkInterfaces
 * @property ScheduledInstancesPlacement|null $Placement
 * @property string|null $RamdiskId
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $SubnetId
 * @property string|null $UserData
 */
class ScheduledInstancesLaunchSpecification extends Shape
{
    /**
     * @param array{
     *     BlockDeviceMappings?: list<ScheduledInstancesBlockDeviceMapping>|null,
     *     EbsOptimized?: bool|null,
     *     IamInstanceProfile?: ScheduledInstancesIamInstanceProfile|null,
     *     ImageId: string,
     *     InstanceType?: string|null,
     *     KernelId?: string|null,
     *     KeyName?: string|null,
     *     Monitoring?: ScheduledInstancesMonitoring|null,
     *     NetworkInterfaces?: list<ScheduledInstancesNetworkInterface>|null,
     *     Placement?: ScheduledInstancesPlacement|null,
     *     RamdiskId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetId?: string|null,
     *     UserData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
