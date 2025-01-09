<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHub\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 */
class HubS3StorageConfig extends Shape
{
    /**
     * @param array{S3OutputPath?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
