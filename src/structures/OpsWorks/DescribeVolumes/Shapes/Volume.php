<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeId
 * @property string|null $Ec2VolumeId
 * @property string|null $Name
 * @property string|null $RaidArrayId
 * @property string|null $InstanceId
 * @property string|null $Status
 * @property int|null $Size
 * @property string|null $Device
 * @property string|null $MountPoint
 * @property string|null $Region
 * @property string|null $AvailabilityZone
 * @property string|null $VolumeType
 * @property int|null $Iops
 * @property bool|null $Encrypted
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string|null,
     *     Ec2VolumeId?: string|null,
     *     Name?: string|null,
     *     RaidArrayId?: string|null,
     *     InstanceId?: string|null,
     *     Status?: string|null,
     *     Size?: int|null,
     *     Device?: string|null,
     *     MountPoint?: string|null,
     *     Region?: string|null,
     *     AvailabilityZone?: string|null,
     *     VolumeType?: string|null,
     *     Iops?: int|null,
     *     Encrypted?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
