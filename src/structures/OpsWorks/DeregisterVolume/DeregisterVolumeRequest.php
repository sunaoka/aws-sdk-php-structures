<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 */
class DeregisterVolumeRequest extends Request
{
    /**
     * @param array{VolumeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
