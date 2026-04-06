<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaArn
 */
class LambdaGraderConfig extends Shape
{
    /**
     * @param array{lambdaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
