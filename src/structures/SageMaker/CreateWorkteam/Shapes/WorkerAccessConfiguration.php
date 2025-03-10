<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Presign|null $S3Presign
 */
class WorkerAccessConfiguration extends Shape
{
    /**
     * @param array{S3Presign?: S3Presign|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
