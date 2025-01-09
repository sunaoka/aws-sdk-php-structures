<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 */
class DetachDiskRequest extends Request
{
    /**
     * @param array{diskName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
