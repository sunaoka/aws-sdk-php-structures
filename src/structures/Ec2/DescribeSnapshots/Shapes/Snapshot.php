<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerAlias
 * @property string|null $OutpostArn
 * @property list<Tag>|null $Tags
 * @property 'archive'|'standard'|null $StorageTier
 * @property \Aws\Api\DateTimeResult|null $RestoreExpiryTime
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 * @property string|null $AvailabilityZone
 * @property 'time-based'|'standard'|null $TransferType
 * @property int|null $CompletionDurationMinutes
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property int|null $FullSnapshotSizeInBytes
 * @property string|null $SnapshotId
 * @property string|null $VolumeId
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering'|null $State
 * @property string|null $StateMessage
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $Progress
 * @property string|null $OwnerId
 * @property string|null $Description
 * @property int|null $VolumeSize
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $DataEncryptionKeyId
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     OwnerAlias?: string|null,
     *     OutpostArn?: string|null,
     *     Tags?: list<Tag>|null,
     *     StorageTier?: 'archive'|'standard'|null,
     *     RestoreExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none'|null,
     *     AvailabilityZone?: string|null,
     *     TransferType?: 'time-based'|'standard'|null,
     *     CompletionDurationMinutes?: int|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     FullSnapshotSizeInBytes?: int|null,
     *     SnapshotId?: string|null,
     *     VolumeId?: string|null,
     *     State?: 'pending'|'completed'|'error'|'recoverable'|'recovering'|null,
     *     StateMessage?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Progress?: string|null,
     *     OwnerId?: string|null,
     *     Description?: string|null,
     *     VolumeSize?: int|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DataEncryptionKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
