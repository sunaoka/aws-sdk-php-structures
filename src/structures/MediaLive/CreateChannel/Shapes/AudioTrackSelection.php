<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioTrack> $Tracks
 * @property AudioDolbyEDecode $DolbyEDecode
 */
class AudioTrackSelection extends Shape
{
    /**
     * @param array{
     *     Tracks: list<AudioTrack>,
     *     DolbyEDecode?: AudioDolbyEDecode
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
