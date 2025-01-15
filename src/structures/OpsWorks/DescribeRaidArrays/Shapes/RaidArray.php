<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRaidArrays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RaidArrayId
 * @property string|null $InstanceId
 * @property string|null $Name
 * @property int|null $RaidLevel
 * @property int|null $NumberOfDisks
 * @property int|null $Size
 * @property string|null $Device
 * @property string|null $MountPoint
 * @property string|null $AvailabilityZone
 * @property string|null $CreatedAt
 * @property string|null $StackId
 * @property string|null $VolumeType
 * @property int|null $Iops
 */
class RaidArray extends Shape
{
    /**
     * @param array{
     *     RaidArrayId?: string|null,
     *     InstanceId?: string|null,
     *     Name?: string|null,
     *     RaidLevel?: int|null,
     *     NumberOfDisks?: int|null,
     *     Size?: int|null,
     *     Device?: string|null,
     *     MountPoint?: string|null,
     *     AvailabilityZone?: string|null,
     *     CreatedAt?: string|null,
     *     StackId?: string|null,
     *     VolumeType?: string|null,
     *     Iops?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
