<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BitRate
 * @property double|null $Duration
 * @property 'mp4'|'quicktime'|'matroska'|'webm'|'mxf'|'wave'|'avi'|'mpegts'|'mpegps'|'mp3'|'flac'|'asf'|'ogg'|null $Format
 * @property string|null $StartTimecode
 * @property list<Track>|null $Tracks
 */
class Container extends Shape
{
    /**
     * @param array{
     *     BitRate?: int|null,
     *     Duration?: double|null,
     *     Format?: 'mp4'|'quicktime'|'matroska'|'webm'|'mxf'|'wave'|'avi'|'mpegts'|'mpegps'|'mp3'|'flac'|'asf'|'ogg'|null,
     *     StartTimecode?: string|null,
     *     Tracks?: list<Track>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
