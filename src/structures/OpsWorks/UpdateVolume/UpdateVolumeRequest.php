<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 * @property string|null $Name
 * @property string|null $MountPoint
 */
class UpdateVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeId: string,
     *     Name?: string|null,
     *     MountPoint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
