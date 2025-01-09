<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 * @property string $Resource
 * @property string $RequestId
 */
class AsyncErrorDetails extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Message?: string,
     *     Resource?: string,
     *     RequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
