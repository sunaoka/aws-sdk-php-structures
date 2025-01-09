<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputChannelLevel> $InputChannelLevels
 * @property int<0, 7> $OutputChannel
 */
class AudioChannelMapping extends Shape
{
    /**
     * @param array{
     *     InputChannelLevels: list<InputChannelLevel>,
     *     OutputChannel: int<0, 7>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
