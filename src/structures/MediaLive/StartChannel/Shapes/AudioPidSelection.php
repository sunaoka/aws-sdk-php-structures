<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 8191> $Pid
 */
class AudioPidSelection extends Shape
{
    /**
     * @param array{Pid: int<0, 8191>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
