<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE_DEPLOYMENT'|'STOP_DEPLOYMENT' $actionOnTimeout
 * @property int $waitTimeInMinutes
 */
class DeploymentReadyOption extends Shape
{
    /**
     * @param array{
     *     actionOnTimeout?: 'CONTINUE_DEPLOYMENT'|'STOP_DEPLOYMENT',
     *     waitTimeInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
