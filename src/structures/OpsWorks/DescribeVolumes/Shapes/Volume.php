<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeId
 * @property string $Ec2VolumeId
 * @property string $Name
 * @property string $RaidArrayId
 * @property string $InstanceId
 * @property string $Status
 * @property int $Size
 * @property string $Device
 * @property string $MountPoint
 * @property string $Region
 * @property string $AvailabilityZone
 * @property string $VolumeType
 * @property int $Iops
 * @property bool $Encrypted
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string,
     *     Ec2VolumeId?: string,
     *     Name?: string,
     *     RaidArrayId?: string,
     *     InstanceId?: string,
     *     Status?: string,
     *     Size?: int,
     *     Device?: string,
     *     MountPoint?: string,
     *     Region?: string,
     *     AvailabilityZone?: string,
     *     VolumeType?: string,
     *     Iops?: int,
     *     Encrypted?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
