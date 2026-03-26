<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string|null $S3BucketOwner
 * @property string $S3Prefix
 * @property string $S3Region
 * @property S3OutputConfigurations $S3OutputConfigurations
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     S3BucketOwner?: string|null,
     *     S3Prefix: string,
     *     S3Region: string,
     *     S3OutputConfigurations: S3OutputConfigurations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
