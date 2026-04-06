<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaximumBitrate
 * @property int|null $MinimumBitrate
 * @property int|null $Priority
 */
class MultiplexStatmuxVideoSettings extends Shape
{
    /**
     * @param array{
     *     MaximumBitrate?: int|null,
     *     MinimumBitrate?: int|null,
     *     Priority?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
