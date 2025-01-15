<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketPolicy
 * @property list<S3BucketAclGrantConfiguration>|null $bucketAclGrants
 * @property S3PublicAccessBlockConfiguration|null $bucketPublicAccessBlock
 * @property array<string, S3AccessPointConfiguration>|null $accessPoints
 */
class S3BucketConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketPolicy?: string|null,
     *     bucketAclGrants?: list<S3BucketAclGrantConfiguration>|null,
     *     bucketPublicAccessBlock?: S3PublicAccessBlockConfiguration|null,
     *     accessPoints?: array<string, S3AccessPointConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
