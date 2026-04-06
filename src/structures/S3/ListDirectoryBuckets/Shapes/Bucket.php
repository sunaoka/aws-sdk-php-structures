<?php

namespace Sunaoka\Aws\Structures\S3\ListDirectoryBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $BucketRegion
 * @property string|null $BucketArn
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     BucketRegion?: string|null,
     *     BucketArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
