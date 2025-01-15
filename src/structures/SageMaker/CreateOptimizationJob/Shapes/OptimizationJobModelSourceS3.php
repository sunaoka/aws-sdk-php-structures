<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Uri
 * @property OptimizationModelAccessConfig|null $ModelAccessConfig
 */
class OptimizationJobModelSourceS3 extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string|null,
     *     ModelAccessConfig?: OptimizationModelAccessConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
