<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketOwner
 * @property string $S3Bucket
 * @property string|null $S3KeyPrefix
 */
class S3BucketSource extends Shape
{
    /**
     * @param array{
     *     S3BucketOwner?: string|null,
     *     S3Bucket: string,
     *     S3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
