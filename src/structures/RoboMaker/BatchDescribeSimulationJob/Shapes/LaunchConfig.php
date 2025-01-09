<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string $launchFile
 * @property array<string, string> $environmentVariables
 * @property PortForwardingConfig $portForwardingConfig
 * @property bool $streamUI
 * @property list<string> $command
 */
class LaunchConfig extends Shape
{
    /**
     * @param array{
     *     packageName?: string,
     *     launchFile?: string,
     *     environmentVariables?: array<string, string>,
     *     portForwardingConfig?: PortForwardingConfig,
     *     streamUI?: bool,
     *     command?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
