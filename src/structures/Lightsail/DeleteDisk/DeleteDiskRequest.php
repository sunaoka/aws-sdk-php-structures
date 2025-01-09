<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property bool $forceDeleteAddOns
 */
class DeleteDiskRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     forceDeleteAddOns?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
