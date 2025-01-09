<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaArn
 */
class LambdaFunctionFlowNodeConfiguration extends Shape
{
    /**
     * @param array{lambdaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
