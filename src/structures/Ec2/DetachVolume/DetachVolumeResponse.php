<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 * @property string|null $Device
 * @property string|null $InstanceId
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy'|null $State
 * @property string|null $VolumeId
 * @property bool|null $DeleteOnTermination
 * @property string|null $AssociatedResource
 * @property string|null $InstanceOwningService
 */
class DetachVolumeResponse extends Response
{
}
