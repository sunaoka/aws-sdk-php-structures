<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 8191>|null $Pid
 */
class VideoSelectorPid extends Shape
{
    /**
     * @param array{Pid?: int<0, 8191>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
