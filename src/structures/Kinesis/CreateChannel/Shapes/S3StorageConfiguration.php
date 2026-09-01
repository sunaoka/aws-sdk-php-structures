<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $ExpectedBucketOwner
 * @property string|null $OutputKeyTemplate
 * @property 'STANDARD'|'INTELLIGENT_TIERING'|'GLACIER_IR'|null $StorageClass
 * @property 'NONE'|'GZIP'|'ZSTD' $CompressionType
 */
class S3StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     ExpectedBucketOwner: string,
     *     OutputKeyTemplate?: string|null,
     *     StorageClass?: 'STANDARD'|'INTELLIGENT_TIERING'|'GLACIER_IR'|null,
     *     CompressionType: 'NONE'|'GZIP'|'ZSTD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
