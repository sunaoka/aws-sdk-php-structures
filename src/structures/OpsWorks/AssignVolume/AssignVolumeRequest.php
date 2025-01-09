<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssignVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 * @property string $InstanceId
 */
class AssignVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeId: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
