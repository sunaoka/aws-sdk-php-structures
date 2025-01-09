<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 * @property string $Name
 * @property string $MountPoint
 */
class UpdateVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeId: string,
     *     Name?: string,
     *     MountPoint?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
