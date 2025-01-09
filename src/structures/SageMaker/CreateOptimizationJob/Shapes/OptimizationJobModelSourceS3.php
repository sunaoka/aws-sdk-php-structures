<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property OptimizationModelAccessConfig $ModelAccessConfig
 */
class OptimizationJobModelSourceS3 extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string,
     *     ModelAccessConfig?: OptimizationModelAccessConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
