<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\DeleteVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 */
class DeleteVolumeRequest extends Request
{
    /**
     * @param array{VolumeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
