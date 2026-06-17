<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 */
class LambdaTransformConfiguration extends Shape
{
    /**
     * @param array{arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
