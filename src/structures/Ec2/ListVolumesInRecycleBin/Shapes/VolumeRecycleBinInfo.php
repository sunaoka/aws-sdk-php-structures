<?php

namespace Sunaoka\Aws\Structures\Ec2\ListVolumesInRecycleBin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeId
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null $State
 * @property int|null $Size
 * @property int|null $Iops
 * @property int|null $Throughput
 * @property string|null $OutpostArn
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property string|null $SourceVolumeId
 * @property string|null $SnapshotId
 * @property OperatorResponse|null $Operator
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $RecycleBinEnterTime
 * @property \Aws\Api\DateTimeResult|null $RecycleBinExitTime
 */
class VolumeRecycleBinInfo extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     State?: 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null,
     *     Size?: int|null,
     *     Iops?: int|null,
     *     Throughput?: int|null,
     *     OutpostArn?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     SourceVolumeId?: string|null,
     *     SnapshotId?: string|null,
     *     Operator?: OperatorResponse|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     RecycleBinEnterTime?: \Aws\Api\DateTimeResult|null,
     *     RecycleBinExitTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
