<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10000>|null $KeyFrameWaitMilliseconds
 */
class KeyFrameFabricSwitchingConfiguration extends Shape
{
    /**
     * @param array{KeyFrameWaitMilliseconds?: int<0, 10000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
