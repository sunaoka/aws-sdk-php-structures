<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $timeoutInSeconds
 */
class DeploymentConfigurationValidationPolicy extends Shape
{
    /**
     * @param array{timeoutInSeconds?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
