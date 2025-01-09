<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $keyTemplate
 */
class S3RecordingDetails extends Shape
{
    /**
     * @param array{
     *     bucketArn?: string,
     *     keyTemplate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
