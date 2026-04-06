<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3BucketOwner
 */
class TargetS3ConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
