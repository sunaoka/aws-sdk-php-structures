<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property string $S3OutputLocation
 */
class OptimizationJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     S3OutputLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
