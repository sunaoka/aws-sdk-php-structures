<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MountPath
 * @property string $S3Uri
 */
class S3FileSystemConfig extends Shape
{
    /**
     * @param array{
     *     MountPath?: string|null,
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
