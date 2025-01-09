<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property HostVolumeProperties $host
 * @property DockerVolumeConfiguration $dockerVolumeConfiguration
 * @property EFSVolumeConfiguration $efsVolumeConfiguration
 * @property FSxWindowsFileServerVolumeConfiguration $fsxWindowsFileServerVolumeConfiguration
 * @property bool $configuredAtLaunch
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     host?: HostVolumeProperties,
     *     dockerVolumeConfiguration?: DockerVolumeConfiguration,
     *     efsVolumeConfiguration?: EFSVolumeConfiguration,
     *     fsxWindowsFileServerVolumeConfiguration?: FSxWindowsFileServerVolumeConfiguration,
     *     configuredAtLaunch?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
