<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputChannelLevel> $InputChannelLevels
 * @property int $OutputChannel
 */
class AudioChannelMapping extends Shape
{
    /**
     * @param array{
     *     InputChannelLevels: list<InputChannelLevel>,
     *     OutputChannel: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
