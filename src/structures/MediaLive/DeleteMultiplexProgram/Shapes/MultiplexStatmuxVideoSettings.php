<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100000, 100000000> $MaximumBitrate
 * @property int<100000, 100000000> $MinimumBitrate
 * @property int<-5, 5> $Priority
 */
class MultiplexStatmuxVideoSettings extends Shape
{
    /**
     * @param array{
     *     MaximumBitrate?: int<100000, 100000000>,
     *     MinimumBitrate?: int<100000, 100000000>,
     *     Priority?: int<-5, 5>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
