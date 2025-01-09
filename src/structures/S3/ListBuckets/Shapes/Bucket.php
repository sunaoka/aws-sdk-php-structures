<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $BucketRegion
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     BucketRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
