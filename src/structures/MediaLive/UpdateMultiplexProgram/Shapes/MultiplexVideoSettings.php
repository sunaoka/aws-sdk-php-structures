<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConstantBitrate
 * @property MultiplexStatmuxVideoSettings $StatmuxSettings
 */
class MultiplexVideoSettings extends Shape
{
    /**
     * @param array{
     *     ConstantBitrate?: int,
     *     StatmuxSettings?: MultiplexStatmuxVideoSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
