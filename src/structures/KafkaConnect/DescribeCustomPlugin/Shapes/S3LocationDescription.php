<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $fileKey
 * @property string $objectVersion
 */
class S3LocationDescription extends Shape
{
    /**
     * @param array{
     *     bucketArn?: string,
     *     fileKey?: string,
     *     objectVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
