<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string $Accept
 * @property 'None'|'Line' $AssembleWith
 * @property string $KmsKeyId
 */
class TransformOutput extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     Accept?: string,
     *     AssembleWith?: 'None'|'Line',
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
