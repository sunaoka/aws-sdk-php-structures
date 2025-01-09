<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $application
 * @property string $applicationVersion
 * @property DeploymentLaunchConfig $launchConfig
 */
class DeploymentApplicationConfig extends Shape
{
    /**
     * @param array{
     *     application: string,
     *     applicationVersion: string,
     *     launchConfig: DeploymentLaunchConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
