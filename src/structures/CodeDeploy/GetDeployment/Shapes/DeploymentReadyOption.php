<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE_DEPLOYMENT'|'STOP_DEPLOYMENT'|null $actionOnTimeout
 * @property int|null $waitTimeInMinutes
 */
class DeploymentReadyOption extends Shape
{
    /**
     * @param array{
     *     actionOnTimeout?: 'CONTINUE_DEPLOYMENT'|'STOP_DEPLOYMENT'|null,
     *     waitTimeInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
