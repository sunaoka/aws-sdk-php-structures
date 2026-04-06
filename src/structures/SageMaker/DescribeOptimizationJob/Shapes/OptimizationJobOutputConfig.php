<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string $S3OutputLocation
 * @property OptimizationSageMakerModel|null $SageMakerModel
 */
class OptimizationJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3OutputLocation: string,
     *     SageMakerModel?: OptimizationSageMakerModel|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
