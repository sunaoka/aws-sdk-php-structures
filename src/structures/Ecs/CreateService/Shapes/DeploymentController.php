<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ECS'|'CODE_DEPLOY'|'EXTERNAL' $type
 */
class DeploymentController extends Shape
{
    /**
     * @param array{type: 'ECS'|'CODE_DEPLOY'|'EXTERNAL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
