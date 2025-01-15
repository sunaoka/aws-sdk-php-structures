<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHub\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3OutputPath
 */
class HubS3StorageConfig extends Shape
{
    /**
     * @param array{S3OutputPath?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
