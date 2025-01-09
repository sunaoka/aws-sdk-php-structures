<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRaidArrays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RaidArrayId
 * @property string $InstanceId
 * @property string $Name
 * @property int $RaidLevel
 * @property int $NumberOfDisks
 * @property int $Size
 * @property string $Device
 * @property string $MountPoint
 * @property string $AvailabilityZone
 * @property string $CreatedAt
 * @property string $StackId
 * @property string $VolumeType
 * @property int $Iops
 */
class RaidArray extends Shape
{
    /**
     * @param array{
     *     RaidArrayId?: string,
     *     InstanceId?: string,
     *     Name?: string,
     *     RaidLevel?: int,
     *     NumberOfDisks?: int,
     *     Size?: int,
     *     Device?: string,
     *     MountPoint?: string,
     *     AvailabilityZone?: string,
     *     CreatedAt?: string,
     *     StackId?: string,
     *     VolumeType?: string,
     *     Iops?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
