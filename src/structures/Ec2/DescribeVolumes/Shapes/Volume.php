<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutpostArn
 * @property int $Iops
 * @property list<Tag> $Tags
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $VolumeType
 * @property bool $FastRestored
 * @property bool $MultiAttachEnabled
 * @property int $Throughput
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 * @property OperatorResponse $Operator
 * @property string $VolumeId
 * @property int $Size
 * @property string $SnapshotId
 * @property string $AvailabilityZone
 * @property 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error' $State
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<VolumeAttachment> $Attachments
 * @property bool $Encrypted
 * @property string $KmsKeyId
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     OutpostArn?: string,
     *     Iops?: int,
     *     Tags?: list<Tag>,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     FastRestored?: bool,
     *     MultiAttachEnabled?: bool,
     *     Throughput?: int,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none',
     *     Operator?: OperatorResponse,
     *     VolumeId?: string,
     *     Size?: int,
     *     SnapshotId?: string,
     *     AvailabilityZone?: string,
     *     State?: 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error',
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     Attachments?: list<VolumeAttachment>,
     *     Encrypted?: bool,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
