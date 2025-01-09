<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BytesTransferred
 * @property int $ObjectsTransferred
 * @property int $TotalBytes
 * @property int $TotalObjects
 */
class DataTransfer extends Shape
{
    /**
     * @param array{
     *     BytesTransferred?: int,
     *     ObjectsTransferred?: int,
     *     TotalBytes?: int,
     *     TotalObjects?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
