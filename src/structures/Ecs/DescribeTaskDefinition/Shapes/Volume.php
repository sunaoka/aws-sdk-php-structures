<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property HostVolumeProperties|null $host
 * @property DockerVolumeConfiguration|null $dockerVolumeConfiguration
 * @property EFSVolumeConfiguration|null $efsVolumeConfiguration
 * @property FSxWindowsFileServerVolumeConfiguration|null $fsxWindowsFileServerVolumeConfiguration
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     host?: HostVolumeProperties|null,
     *     dockerVolumeConfiguration?: DockerVolumeConfiguration|null,
     *     efsVolumeConfiguration?: EFSVolumeConfiguration|null,
     *     fsxWindowsFileServerVolumeConfiguration?: FSxWindowsFileServerVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
