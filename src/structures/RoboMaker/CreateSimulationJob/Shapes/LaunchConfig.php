<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $packageName
 * @property string|null $launchFile
 * @property array<string, string>|null $environmentVariables
 * @property PortForwardingConfig|null $portForwardingConfig
 * @property bool|null $streamUI
 * @property list<string>|null $command
 */
class LaunchConfig extends Shape
{
    /**
     * @param array{
     *     packageName?: string|null,
     *     launchFile?: string|null,
     *     environmentVariables?: array<string, string>|null,
     *     portForwardingConfig?: PortForwardingConfig|null,
     *     streamUI?: bool|null,
     *     command?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
