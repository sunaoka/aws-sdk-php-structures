<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaFunctionArn
 */
class LambdaExecutorConfiguration extends Shape
{
    /**
     * @param array{lambdaFunctionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
