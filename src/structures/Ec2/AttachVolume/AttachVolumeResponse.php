<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $DeleteOnTermination
 * @property string|null $AssociatedResource
 * @property string|null $InstanceOwningService
 * @property int|null $EbsCardIndex
 * @property string|null $VolumeId
 * @property string|null $InstanceId
 * @property string|null $Device
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy'|null $State
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 */
class AttachVolumeResponse extends Response
{
}
