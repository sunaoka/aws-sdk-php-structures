<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3BucketOwner
 */
class TargetS3Configuration extends Shape
{
    /**
     * @param array{
     *     s3Bucket: string,
     *     s3BucketOwner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
