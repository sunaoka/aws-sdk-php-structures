<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property int|null $ThresholdSeconds
 */
class SilentAudio extends Shape
{
    /**
     * @param array{
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     ThresholdSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
