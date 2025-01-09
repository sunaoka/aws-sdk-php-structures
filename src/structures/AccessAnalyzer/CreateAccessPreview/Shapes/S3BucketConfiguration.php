<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketPolicy
 * @property list<S3BucketAclGrantConfiguration> $bucketAclGrants
 * @property S3PublicAccessBlockConfiguration $bucketPublicAccessBlock
 * @property array<string, S3AccessPointConfiguration> $accessPoints
 */
class S3BucketConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketPolicy?: string,
     *     bucketAclGrants?: list<S3BucketAclGrantConfiguration>,
     *     bucketPublicAccessBlock?: S3PublicAccessBlockConfiguration,
     *     accessPoints?: array<string, S3AccessPointConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
