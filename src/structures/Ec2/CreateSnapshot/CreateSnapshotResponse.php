<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OwnerAlias
 * @property string $OutpostArn
 * @property list<Shapes\Tag> $Tags
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
class CreateSnapshotResponse extends Response
{
}
