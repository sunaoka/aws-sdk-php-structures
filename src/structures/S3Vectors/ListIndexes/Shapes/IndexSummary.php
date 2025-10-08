<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vectorBucketName
 * @property string $indexName
 * @property string $indexArn
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class IndexSummary extends Shape
{
    /**
     * @param array{
     *     vectorBucketName: string,
     *     indexName: string,
     *     indexArn: string,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
