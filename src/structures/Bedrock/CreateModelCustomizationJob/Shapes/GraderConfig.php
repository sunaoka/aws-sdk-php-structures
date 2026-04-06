<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaGraderConfig|null $lambdaGrader
 */
class GraderConfig extends Shape
{
    /**
     * @param array{lambdaGrader?: LambdaGraderConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
