<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketPolicy
 * @property array<string, S3ExpressDirectoryAccessPointConfiguration>|null $accessPoints
 */
class S3ExpressDirectoryBucketConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketPolicy?: string|null,
     *     accessPoints?: array<string, S3ExpressDirectoryAccessPointConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
