<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property string $S3OutputPath
 */
class AutoMLOutputDataConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     S3OutputPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
