<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketOwner
 * @property string $S3Bucket
 * @property string $S3KeyPrefix
 */
class S3BucketSource extends Shape
{
    /**
     * @param array{
     *     S3BucketOwner?: string,
     *     S3Bucket: string,
     *     S3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
