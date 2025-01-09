<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 * @property int $ThresholdSeconds
 */
class FrozenFrames extends Shape
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
