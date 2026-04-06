<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string $S3OutputLocation
 */
class OptimizationJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3OutputLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
