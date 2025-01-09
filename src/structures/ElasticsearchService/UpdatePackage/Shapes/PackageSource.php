<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property string $S3Key
 */
class PackageSource extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string,
     *     S3Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
