<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OutpostArn
 * @property int|null $Iops
 * @property list<Shapes\Tag>|null $Tags
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property bool|null $FastRestored
 * @property bool|null $MultiAttachEnabled
 * @property int|null $Throughput
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 * @property Shapes\OperatorResponse|null $Operator
 * @property int|null $VolumeInitializationRate
 * @property string|null $VolumeId
 * @property int|null $Size
 * @property string|null $SnapshotId
 * @property string|null $AvailabilityZone
 * @property 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<Shapes\VolumeAttachment>|null $Attachments
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 */
class CreateVolumeResponse extends Response
{
}
