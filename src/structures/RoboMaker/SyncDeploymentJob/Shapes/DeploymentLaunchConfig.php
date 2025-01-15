<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string|null $preLaunchFile
 * @property string $launchFile
 * @property string|null $postLaunchFile
 * @property array<string, string>|null $environmentVariables
 */
class DeploymentLaunchConfig extends Shape
{
    /**
     * @param array{
     *     packageName: string,
     *     preLaunchFile?: string|null,
     *     launchFile: string,
     *     postLaunchFile?: string|null,
     *     environmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
