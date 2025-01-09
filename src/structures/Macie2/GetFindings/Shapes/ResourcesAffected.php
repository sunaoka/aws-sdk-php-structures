<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket $s3Bucket
 * @property S3Object $s3Object
 */
class ResourcesAffected extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: S3Bucket,
     *     s3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
