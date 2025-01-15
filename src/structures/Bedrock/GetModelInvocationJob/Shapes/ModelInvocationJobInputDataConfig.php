<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationJobS3InputDataConfig|null $s3InputDataConfig
 */
class ModelInvocationJobInputDataConfig extends Shape
{
    /**
     * @param array{s3InputDataConfig?: ModelInvocationJobS3InputDataConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
