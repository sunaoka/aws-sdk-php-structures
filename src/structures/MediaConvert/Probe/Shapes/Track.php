<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioProperties|null $AudioProperties
 * @property 'UNKNOWN'|'AAC'|'AC3'|'EAC3'|'FLAC'|'MP3'|'OPUS'|'PCM'|'VORBIS'|'AV1'|'AVC'|'HEVC'|'JPEG2000'|'MJPEG'|'MP4V'|'MPEG2'|'PRORES'|'THEORA'|'VP8'|'VP9'|'C608'|'C708'|'WEBVTT'|null $Codec
 * @property DataProperties|null $DataProperties
 * @property double|null $Duration
 * @property int|null $Index
 * @property 'video'|'audio'|'data'|null $TrackType
 * @property VideoProperties|null $VideoProperties
 */
class Track extends Shape
{
    /**
     * @param array{
     *     AudioProperties?: AudioProperties|null,
     *     Codec?: 'UNKNOWN'|'AAC'|'AC3'|'EAC3'|'FLAC'|'MP3'|'OPUS'|'PCM'|'VORBIS'|'AV1'|'AVC'|'HEVC'|'JPEG2000'|'MJPEG'|'MP4V'|'MPEG2'|'PRORES'|'THEORA'|'VP8'|'VP9'|'C608'|'C708'|'WEBVTT'|null,
     *     DataProperties?: DataProperties|null,
     *     Duration?: double|null,
     *     Index?: int|null,
     *     TrackType?: 'video'|'audio'|'data'|null,
     *     VideoProperties?: VideoProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
