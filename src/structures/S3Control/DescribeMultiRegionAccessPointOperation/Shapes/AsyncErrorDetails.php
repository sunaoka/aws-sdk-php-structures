<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 * @property string|null $Resource
 * @property string|null $RequestId
 */
class AsyncErrorDetails extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null,
     *     Resource?: string|null,
     *     RequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
