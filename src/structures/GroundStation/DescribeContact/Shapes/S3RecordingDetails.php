<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketArn
 * @property string|null $keyTemplate
 */
class S3RecordingDetails extends Shape
{
    /**
     * @param array{
     *     bucketArn?: string|null,
     *     keyTemplate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
