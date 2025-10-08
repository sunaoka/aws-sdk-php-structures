<?php

namespace Sunaoka\Aws\Structures\SageMaker\AttachClusterNodeVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterArn
 * @property string $NodeId
 * @property string $VolumeId
 * @property \Aws\Api\DateTimeResult $AttachTime
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy' $Status
 * @property string $DeviceName
 */
class AttachClusterNodeVolumeResponse extends Response
{
}
