<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'task'|'shared'|null $scope
 * @property bool|null $autoprovision
 * @property string|null $driver
 * @property array<string, string>|null $driverOpts
 * @property array<string, string>|null $labels
 */
class DockerVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     scope?: 'task'|'shared'|null,
     *     autoprovision?: bool|null,
     *     driver?: string|null,
     *     driverOpts?: array<string, string>|null,
     *     labels?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
