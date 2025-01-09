<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListDeploymentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string $preLaunchFile
 * @property string $launchFile
 * @property string $postLaunchFile
 * @property array<string, string> $environmentVariables
 */
class DeploymentLaunchConfig extends Shape
{
    /**
     * @param array{
     *     packageName: string,
     *     preLaunchFile?: string,
     *     launchFile: string,
     *     postLaunchFile?: string,
     *     environmentVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
