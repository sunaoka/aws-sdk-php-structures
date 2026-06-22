<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 * @property int<10, 60> $ThresholdSeconds
 */
class BlackFramesConfiguration extends Shape
{
    /**
     * @param array{
     *     State: 'ENABLED'|'DISABLED',
     *     ThresholdSeconds: int<10, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
