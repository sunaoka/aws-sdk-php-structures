<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OutpostArn
 * @property int $Iops
 * @property list<Shapes\Tag> $Tags
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $VolumeType
 * @property bool $FastRestored
 * @property bool $MultiAttachEnabled
 * @property int $Throughput
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 * @property Shapes\OperatorResponse $Operator
 * @property string $VolumeId
 * @property int $Size
 * @property string $SnapshotId
 * @property string $AvailabilityZone
 * @property 'creating'|'available'|'in-use'|'deleting'|'deleted'|'error' $State
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<Shapes\VolumeAttachment> $Attachments
 * @property bool $Encrypted
 * @property string $KmsKeyId
 */
class CreateVolumeResponse extends Response
{
}
