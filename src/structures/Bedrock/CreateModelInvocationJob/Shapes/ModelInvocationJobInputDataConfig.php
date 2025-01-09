<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelInvocationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationJobS3InputDataConfig $s3InputDataConfig
 */
class ModelInvocationJobInputDataConfig extends Shape
{
    /**
     * @param array{s3InputDataConfig?: ModelInvocationJobS3InputDataConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
