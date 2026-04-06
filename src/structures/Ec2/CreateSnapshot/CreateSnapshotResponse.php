<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DataEncryptionKeyId
 * @property string|null $Description
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $OwnerId
 * @property string|null $Progress
 * @property string|null $SnapshotId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering'|null $State
 * @property string|null $StateMessage
 * @property string|null $VolumeId
 * @property int|null $VolumeSize
 * @property string|null $OwnerAlias
 * @property string|null $OutpostArn
 * @property list<Shapes\Tag>|null $Tags
 * @property 'archive'|'standard'|null $StorageTier
 * @property \Aws\Api\DateTimeResult|null $RestoreExpiryTime
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 */
class CreateSnapshotResponse extends Response
{
}
