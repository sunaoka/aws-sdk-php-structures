<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioTrack> $Tracks
 * @property AudioDolbyEDecode|null $DolbyEDecode
 */
class AudioTrackSelection extends Shape
{
    /**
     * @param array{
     *     Tracks: list<AudioTrack>,
     *     DolbyEDecode?: AudioDolbyEDecode|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
