<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OwnerAlias
 * @property string|null $OutpostArn
 * @property list<Shapes\Tag>|null $Tags
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
class CreateSnapshotResponse extends Response
{
}
