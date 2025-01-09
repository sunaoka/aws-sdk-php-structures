<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rollbackDeploymentId
 * @property string $rollbackTriggeringDeploymentId
 * @property string $rollbackMessage
 */
class RollbackInfo extends Shape
{
    /**
     * @param array{
     *     rollbackDeploymentId?: string,
     *     rollbackTriggeringDeploymentId?: string,
     *     rollbackMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
