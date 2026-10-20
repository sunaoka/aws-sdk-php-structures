<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ModifyVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VolumeId
 * @property int<0, max>|null $TargetSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $TargetVolumeType
 * @property int<0, max>|null $TargetIops
 * @property int<0, max>|null $TargetThroughput
 */
class ModifyVolumeResponse extends Response
{
}
