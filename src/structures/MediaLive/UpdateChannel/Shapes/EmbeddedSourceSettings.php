<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'UPCONVERT' $Convert608To708
 * @property 'AUTO'|'OFF' $Scte20Detection
 * @property int $Source608ChannelNumber
 * @property int $Source608TrackNumber
 */
class EmbeddedSourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'DISABLED'|'UPCONVERT',
     *     Scte20Detection?: 'AUTO'|'OFF',
     *     Source608ChannelNumber?: int,
     *     Source608TrackNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
