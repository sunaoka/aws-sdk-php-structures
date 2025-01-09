<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 */
class GetDiskRequest extends Request
{
    /**
     * @param array{diskName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
