<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentType
 * @property string $ContentDigest
 * @property string $S3Uri
 */
class FileSource extends Shape
{
    /**
     * @param array{
     *     ContentType?: string,
     *     ContentDigest?: string,
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
