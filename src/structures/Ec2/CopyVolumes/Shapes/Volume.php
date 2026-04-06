<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZoneId
 * @property string|null $OutpostArn
 * @property string|null $SourceVolumeId
 * @property int|null $Iops
 * @property list<Tag>|null $Tags
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property bool|null $FastRestored
 * @property bool|null $MultiAttachEnabled
 * @property int|null $Throughput
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 * @property OperatorResponse|null $Operator
 * @property int|null $VolumeInitializationRate
 * @property string|null $VolumeId
 * @property int|null $Size
 * @property string|null $SnapshotId
 * @property string|null $AvailabilityZone
 * @property 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<VolumeAttachment>|null $Attachments
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneId?: string|null,
     *     OutpostArn?: string|null,
     *     SourceVolumeId?: string|null,
     *     Iops?: int|null,
     *     Tags?: list<Tag>|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     FastRestored?: bool|null,
     *     MultiAttachEnabled?: bool|null,
     *     Throughput?: int|null,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none'|null,
     *     Operator?: OperatorResponse|null,
     *     VolumeInitializationRate?: int|null,
     *     VolumeId?: string|null,
     *     Size?: int|null,
     *     SnapshotId?: string|null,
     *     AvailabilityZone?: string|null,
     *     State?: 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Attachments?: list<VolumeAttachment>|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
