<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationJobS3OutputDataConfig|null $s3OutputDataConfig
 */
class ModelInvocationJobOutputDataConfig extends Shape
{
    /**
     * @param array{s3OutputDataConfig?: ModelInvocationJobS3OutputDataConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
