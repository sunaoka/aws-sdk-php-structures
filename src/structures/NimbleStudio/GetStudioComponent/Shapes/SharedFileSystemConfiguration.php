<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $endpoint
 * @property string|null $fileSystemId
 * @property string|null $linuxMountPoint
 * @property string|null $shareName
 * @property string|null $windowsMountDrive
 */
class SharedFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint?: string|null,
     *     fileSystemId?: string|null,
     *     linuxMountPoint?: string|null,
     *     shareName?: string|null,
     *     windowsMountDrive?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
