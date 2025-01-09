<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationJobS3OutputDataConfig $s3OutputDataConfig
 */
class ModelInvocationJobOutputDataConfig extends Shape
{
    /**
     * @param array{s3OutputDataConfig?: ModelInvocationJobS3OutputDataConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
