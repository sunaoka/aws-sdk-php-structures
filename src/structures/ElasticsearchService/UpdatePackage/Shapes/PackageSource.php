<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketName
 * @property string|null $S3Key
 */
class PackageSource extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string|null,
     *     S3Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
