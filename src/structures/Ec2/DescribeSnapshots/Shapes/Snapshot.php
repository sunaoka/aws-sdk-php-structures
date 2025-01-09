<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerAlias
 * @property string $OutpostArn
 * @property list<Tag> $Tags
 * @property 'archive'|'standard' $StorageTier
 * @property \Aws\Api\DateTimeResult $RestoreExpiryTime
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 * @property string $AvailabilityZone
 * @property 'time-based'|'standard' $TransferType
 * @property int $CompletionDurationMinutes
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $SnapshotId
 * @property string $VolumeId
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering' $State
 * @property string $StateMessage
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $Progress
 * @property string $OwnerId
 * @property string $Description
 * @property int $VolumeSize
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property string $DataEncryptionKeyId
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     OwnerAlias?: string,
     *     OutpostArn?: string,
     *     Tags?: list<Tag>,
     *     StorageTier?: 'archive'|'standard',
     *     RestoreExpiryTime?: \Aws\Api\DateTimeResult,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none',
     *     AvailabilityZone?: string,
     *     TransferType?: 'time-based'|'standard',
     *     CompletionDurationMinutes?: int,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     SnapshotId?: string,
     *     VolumeId?: string,
     *     State?: 'pending'|'completed'|'error'|'recoverable'|'recovering',
     *     StateMessage?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Progress?: string,
     *     OwnerId?: string,
     *     Description?: string,
     *     VolumeSize?: int,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     DataEncryptionKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
