<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 * @property int $ThresholdSeconds
 */
class BlackFrames extends Shape
{
    /**
     * @param array{
     *     State?: 'ENABLED'|'DISABLED',
     *     ThresholdSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
