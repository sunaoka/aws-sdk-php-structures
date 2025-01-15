<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100000, 100000000>|null $MaximumBitrate
 * @property int<100000, 100000000>|null $MinimumBitrate
 * @property int<-5, 5>|null $Priority
 */
class MultiplexStatmuxVideoSettings extends Shape
{
    /**
     * @param array{
     *     MaximumBitrate?: int<100000, 100000000>|null,
     *     MinimumBitrate?: int<100000, 100000000>|null,
     *     Priority?: int<-5, 5>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
