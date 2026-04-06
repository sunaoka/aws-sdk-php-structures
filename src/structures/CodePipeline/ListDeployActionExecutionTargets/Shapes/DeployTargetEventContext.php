<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListDeployActionExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ssmCommandId
 * @property string|null $message
 */
class DeployTargetEventContext extends Shape
{
    /**
     * @param array{
     *     ssmCommandId?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
