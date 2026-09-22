<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $bytes
 * @property int<0, max>|null $packets
 * @property int<0, max>|null $flows
 * @property int<0, max>|null $sentBytes
 * @property int<0, max>|null $receivedBytes
 */
class EdgeTrafficStats extends Shape
{
    /**
     * @param array{
     *     bytes?: int<0, max>|null,
     *     packets?: int<0, max>|null,
     *     flows?: int<0, max>|null,
     *     sentBytes?: int<0, max>|null,
     *     receivedBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
