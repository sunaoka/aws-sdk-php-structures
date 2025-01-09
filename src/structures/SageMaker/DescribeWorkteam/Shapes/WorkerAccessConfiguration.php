<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Presign $S3Presign
 */
class WorkerAccessConfiguration extends Shape
{
    /**
     * @param array{S3Presign?: S3Presign} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
