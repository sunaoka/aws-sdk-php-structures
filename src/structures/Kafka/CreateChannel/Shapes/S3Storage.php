<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketArn
 * @property 'NONE'|'GZIP'|'ZSTD' $CompressionType
 * @property string|null $OutputPrefix
 * @property string|null $OutputKeyTemplate
 * @property 'STANDARD'|'INTELLIGENT_TIERING'|'GLACIER_IR' $StorageClass
 * @property string|null $ExpectedBucketOwner
 */
class S3Storage extends Shape
{
    /**
     * @param array{
     *     BucketArn: string,
     *     CompressionType: 'NONE'|'GZIP'|'ZSTD',
     *     OutputPrefix?: string|null,
     *     OutputKeyTemplate?: string|null,
     *     StorageClass: 'STANDARD'|'INTELLIGENT_TIERING'|'GLACIER_IR',
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
