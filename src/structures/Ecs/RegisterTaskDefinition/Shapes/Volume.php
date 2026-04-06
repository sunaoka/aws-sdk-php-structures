<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property HostVolumeProperties|null $host
 * @property DockerVolumeConfiguration|null $dockerVolumeConfiguration
 * @property EFSVolumeConfiguration|null $efsVolumeConfiguration
 * @property FSxWindowsFileServerVolumeConfiguration|null $fsxWindowsFileServerVolumeConfiguration
 * @property bool|null $configuredAtLaunch
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     host?: HostVolumeProperties|null,
     *     dockerVolumeConfiguration?: DockerVolumeConfiguration|null,
     *     efsVolumeConfiguration?: EFSVolumeConfiguration|null,
     *     fsxWindowsFileServerVolumeConfiguration?: FSxWindowsFileServerVolumeConfiguration|null,
     *     configuredAtLaunch?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
