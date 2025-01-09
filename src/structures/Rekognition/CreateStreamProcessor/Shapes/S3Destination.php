<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $KeyPrefix
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
