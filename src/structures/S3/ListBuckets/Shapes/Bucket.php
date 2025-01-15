<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $BucketRegion
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     BucketRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
