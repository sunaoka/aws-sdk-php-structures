<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'UNAVAILABLE' $EchoReduction
 */
class AudioFeatures extends Shape
{
    /**
     * @param array{EchoReduction?: 'AVAILABLE'|'UNAVAILABLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
