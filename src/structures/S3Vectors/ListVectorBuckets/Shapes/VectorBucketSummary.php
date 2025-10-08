<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListVectorBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vectorBucketName
 * @property string $vectorBucketArn
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class VectorBucketSummary extends Shape
{
    /**
     * @param array{
     *     vectorBucketName: string,
     *     vectorBucketArn: string,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
