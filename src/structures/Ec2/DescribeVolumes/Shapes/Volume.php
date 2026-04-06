<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeAttachment>|null $Attachments
 * @property string|null $AvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $OutpostArn
 * @property int|null $Size
 * @property string|null $SnapshotId
 * @property 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null $State
 * @property string|null $VolumeId
 * @property int|null $Iops
 * @property list<Tag>|null $Tags
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property bool|null $FastRestored
 * @property bool|null $MultiAttachEnabled
 * @property int|null $Throughput
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     Attachments?: list<VolumeAttachment>|null,
     *     AvailabilityZone?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     OutpostArn?: string|null,
     *     Size?: int|null,
     *     SnapshotId?: string|null,
     *     State?: 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null,
     *     VolumeId?: string|null,
     *     Iops?: int|null,
     *     Tags?: list<Tag>|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     FastRestored?: bool|null,
     *     MultiAttachEnabled?: bool|null,
     *     Throughput?: int|null,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
