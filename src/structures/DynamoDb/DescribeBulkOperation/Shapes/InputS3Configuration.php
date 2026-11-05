<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketOwner
 * @property string $S3Bucket
 * @property string|null $S3KeyPrefix
 * @property 'DYNAMODB_JSON'|'ION' $InputFormat
 * @property 'GZIP'|'ZSTD'|'NONE'|null $InputCompressionType
 */
class InputS3Configuration extends Shape
{
    /**
     * @param array{
     *     S3BucketOwner?: string|null,
     *     S3Bucket: string,
     *     S3KeyPrefix?: string|null,
     *     InputFormat: 'DYNAMODB_JSON'|'ION',
     *     InputCompressionType?: 'GZIP'|'ZSTD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
