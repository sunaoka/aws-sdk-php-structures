<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'UPCONVERT'|null $Convert608To708
 * @property 'AUTO'|'OFF'|null $Scte20Detection
 * @property int|null $Source608ChannelNumber
 * @property int|null $Source608TrackNumber
 */
class EmbeddedSourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'DISABLED'|'UPCONVERT'|null,
     *     Scte20Detection?: 'AUTO'|'OFF'|null,
     *     Source608ChannelNumber?: int|null,
     *     Source608TrackNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
