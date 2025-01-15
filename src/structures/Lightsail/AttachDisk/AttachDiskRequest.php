<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property string $instanceName
 * @property string $diskPath
 * @property bool|null $autoMounting
 */
class AttachDiskRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     instanceName: string,
     *     diskPath: string,
     *     autoMounting?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
