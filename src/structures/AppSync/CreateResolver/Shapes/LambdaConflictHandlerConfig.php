<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaConflictHandlerArn
 */
class LambdaConflictHandlerConfig extends Shape
{
    /**
     * @param array{lambdaConflictHandlerArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
