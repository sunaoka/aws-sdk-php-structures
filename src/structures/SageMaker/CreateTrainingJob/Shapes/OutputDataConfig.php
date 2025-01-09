<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property string $S3OutputPath
 * @property 'GZIP'|'NONE' $CompressionType
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     S3OutputPath: string,
     *     CompressionType?: 'GZIP'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
