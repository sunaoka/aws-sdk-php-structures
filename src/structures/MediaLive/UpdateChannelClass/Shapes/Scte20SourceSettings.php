<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'UPCONVERT' $Convert608To708
 * @property int $Source608ChannelNumber
 */
class Scte20SourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'DISABLED'|'UPCONVERT',
     *     Source608ChannelNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
