<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'UNAVAILABLE'|null $EchoReduction
 */
class AudioFeatures extends Shape
{
    /**
     * @param array{EchoReduction?: 'AVAILABLE'|'UNAVAILABLE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
