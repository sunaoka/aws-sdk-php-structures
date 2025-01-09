<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3BucketOwner
 * @property string $s3Key
 */
class S3BucketSource extends Shape
{
    /**
     * @param array{
     *     s3Bucket: string,
     *     s3BucketOwner?: string,
     *     s3Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
