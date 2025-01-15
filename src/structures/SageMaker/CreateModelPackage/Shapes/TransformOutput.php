<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string|null $Accept
 * @property 'None'|'Line'|null $AssembleWith
 * @property string|null $KmsKeyId
 */
class TransformOutput extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     Accept?: string|null,
     *     AssembleWith?: 'None'|'Line'|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
