<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumBitrate
 * @property int $MinimumBitrate
 * @property int $Priority
 */
class MultiplexStatmuxVideoSettings extends Shape
{
    /**
     * @param array{
     *     MaximumBitrate?: int,
     *     MinimumBitrate?: int,
     *     Priority?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
