<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SilentAudio $SilentAudio
 */
class AudioMonitoringSetting extends Shape
{
    /**
     * @param array{SilentAudio?: SilentAudio} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
