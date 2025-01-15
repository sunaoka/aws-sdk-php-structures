<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property bool|null $forceDeleteAddOns
 */
class DeleteDiskRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     forceDeleteAddOns?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
