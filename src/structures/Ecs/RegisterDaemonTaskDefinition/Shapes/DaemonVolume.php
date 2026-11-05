<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterDaemonTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property HostVolumeProperties|null $host
 * @property LogDriverVolumeConfiguration|null $logDriverVolumeConfiguration
 */
class DaemonVolume extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     host?: HostVolumeProperties|null,
     *     logDriverVolumeConfiguration?: LogDriverVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
