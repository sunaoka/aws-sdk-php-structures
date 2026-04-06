<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FrameHeight
 * @property int $FrameWidth
 */
class FrameResolution extends Shape
{
    /**
     * @param array{
     *     FrameHeight: int,
     *     FrameWidth: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
