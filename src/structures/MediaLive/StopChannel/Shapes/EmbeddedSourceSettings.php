<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'UPCONVERT' $Convert608To708
 * @property 'AUTO'|'OFF' $Scte20Detection
 * @property int<1, 4> $Source608ChannelNumber
 * @property int<1, 5> $Source608TrackNumber
 */
class EmbeddedSourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'DISABLED'|'UPCONVERT',
     *     Scte20Detection?: 'AUTO'|'OFF',
     *     Source608ChannelNumber?: int<1, 4>,
     *     Source608TrackNumber?: int<1, 5>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
