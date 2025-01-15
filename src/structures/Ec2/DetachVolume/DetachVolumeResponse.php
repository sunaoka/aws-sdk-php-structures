<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $DeleteOnTermination
 * @property string|null $AssociatedResource
 * @property string|null $InstanceOwningService
 * @property string|null $VolumeId
 * @property string|null $InstanceId
 * @property string|null $Device
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy'|null $State
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 */
class DetachVolumeResponse extends Response
{
}
