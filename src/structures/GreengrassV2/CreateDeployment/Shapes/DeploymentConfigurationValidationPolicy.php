<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeoutInSeconds
 */
class DeploymentConfigurationValidationPolicy extends Shape
{
    /**
     * @param array{timeoutInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
