<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaTransformConfiguration|null $lambda
 */
class CustomTransformConfiguration extends Shape
{
    /**
     * @param array{lambda?: LambdaTransformConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
