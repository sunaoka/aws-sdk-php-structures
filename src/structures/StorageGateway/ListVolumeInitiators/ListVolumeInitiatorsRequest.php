<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumeInitiators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 */
class ListVolumeInitiatorsRequest extends Request
{
    /**
     * @param array{VolumeARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
