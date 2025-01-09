<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pid
 */
class VideoSelectorPid extends Shape
{
    /**
     * @param array{Pid?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
