<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $DeleteOnTermination
 * @property string $AssociatedResource
 * @property string $InstanceOwningService
 * @property string $VolumeId
 * @property string $InstanceId
 * @property string $Device
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy' $State
 * @property \Aws\Api\DateTimeResult $AttachTime
 */
class DetachVolumeResponse extends Response
{
}
