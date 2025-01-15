<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OptimizationJobModelSourceS3|null $S3
 */
class OptimizationJobModelSource extends Shape
{
    /**
     * @param array{S3?: OptimizationJobModelSourceS3|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
