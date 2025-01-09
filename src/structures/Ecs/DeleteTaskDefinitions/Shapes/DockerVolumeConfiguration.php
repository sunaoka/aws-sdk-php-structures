<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'task'|'shared' $scope
 * @property bool $autoprovision
 * @property string $driver
 * @property array<string, string> $driverOpts
 * @property array<string, string> $labels
 */
class DockerVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     scope?: 'task'|'shared',
     *     autoprovision?: bool,
     *     driver?: string,
     *     driverOpts?: array<string, string>,
     *     labels?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
