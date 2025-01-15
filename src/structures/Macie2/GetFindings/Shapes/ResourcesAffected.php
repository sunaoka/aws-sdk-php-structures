<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket|null $s3Bucket
 * @property S3Object|null $s3Object
 */
class ResourcesAffected extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: S3Bucket|null,
     *     s3Object?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
