<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ConstantBitrate
 * @property MultiplexStatmuxVideoSettings|null $StatmuxSettings
 */
class MultiplexVideoSettings extends Shape
{
    /**
     * @param array{
     *     ConstantBitrate?: int|null,
     *     StatmuxSettings?: MultiplexStatmuxVideoSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
