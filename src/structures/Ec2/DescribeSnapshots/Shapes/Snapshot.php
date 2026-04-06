<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property list<Tag>|null $Tags
 * @property 'archive'|'standard'|null $StorageTier
 * @property \Aws\Api\DateTimeResult|null $RestoreExpiryTime
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     DataEncryptionKeyId?: string|null,
     *     Description?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     OwnerId?: string|null,
     *     Progress?: string|null,
     *     SnapshotId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'pending'|'completed'|'error'|'recoverable'|'recovering'|null,
     *     StateMessage?: string|null,
     *     VolumeId?: string|null,
     *     VolumeSize?: int|null,
     *     OwnerAlias?: string|null,
     *     OutpostArn?: string|null,
     *     Tags?: list<Tag>|null,
     *     StorageTier?: 'archive'|'standard'|null,
     *     RestoreExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     SseType?: 'sse-ebs'|'sse-kms'|'none'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
