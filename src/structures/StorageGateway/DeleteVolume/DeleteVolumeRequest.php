<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 */
class DeleteVolumeRequest extends Request
{
    /**
     * @param array{VolumeARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
