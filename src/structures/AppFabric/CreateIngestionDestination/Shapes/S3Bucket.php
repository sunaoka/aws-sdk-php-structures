<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $prefix
 */
class S3Bucket extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
