<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationMapperSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3BucketOwner
 * @property string|null $s3Key
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3BucketOwner?: string|null,
     *     s3Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
