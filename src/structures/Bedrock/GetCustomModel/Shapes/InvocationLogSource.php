<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Uri
 */
class InvocationLogSource extends Shape
{
    /**
     * @param array{s3Uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
