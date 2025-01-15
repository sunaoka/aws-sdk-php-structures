<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $KeyPrefix
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
