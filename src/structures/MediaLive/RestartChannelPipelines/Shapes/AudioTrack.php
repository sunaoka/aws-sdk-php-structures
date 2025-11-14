<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Track
 */
class AudioTrack extends Shape
{
    /**
     * @param array{Track: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
