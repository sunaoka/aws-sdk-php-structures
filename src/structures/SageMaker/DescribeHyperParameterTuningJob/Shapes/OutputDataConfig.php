<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string $S3OutputPath
 * @property 'GZIP'|'NONE'|null $CompressionType
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3OutputPath: string,
     *     CompressionType?: 'GZIP'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
