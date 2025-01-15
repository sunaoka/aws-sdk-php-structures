<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rollbackDeploymentId
 * @property string|null $rollbackTriggeringDeploymentId
 * @property string|null $rollbackMessage
 */
class RollbackInfo extends Shape
{
    /**
     * @param array{
     *     rollbackDeploymentId?: string|null,
     *     rollbackTriggeringDeploymentId?: string|null,
     *     rollbackMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
