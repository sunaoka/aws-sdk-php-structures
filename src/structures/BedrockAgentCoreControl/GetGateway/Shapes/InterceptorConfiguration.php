<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaInterceptorConfiguration|null $lambda
 */
class InterceptorConfiguration extends Shape
{
    /**
     * @param array{lambda?: LambdaInterceptorConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
