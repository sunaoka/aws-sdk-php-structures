<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100000, 100000000> $ConstantBitrate
 * @property MultiplexStatmuxVideoSettings $StatmuxSettings
 */
class MultiplexVideoSettings extends Shape
{
    /**
     * @param array{
     *     ConstantBitrate?: int<100000, 100000000>,
     *     StatmuxSettings?: MultiplexStatmuxVideoSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
