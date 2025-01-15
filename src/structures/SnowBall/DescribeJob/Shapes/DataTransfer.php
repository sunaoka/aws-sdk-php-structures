<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BytesTransferred
 * @property int|null $ObjectsTransferred
 * @property int|null $TotalBytes
 * @property int|null $TotalObjects
 */
class DataTransfer extends Shape
{
    /**
     * @param array{
     *     BytesTransferred?: int|null,
     *     ObjectsTransferred?: int|null,
     *     TotalBytes?: int|null,
     *     TotalObjects?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
