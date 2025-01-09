<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UnassignVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 */
class UnassignVolumeRequest extends Request
{
    /**
     * @param array{VolumeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
