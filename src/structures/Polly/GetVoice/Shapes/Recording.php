<?php

namespace Sunaoka\Aws\Structures\Polly\GetVoice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'wav'|'flac'|'ogg_vorbis'|'mp3' $Format
 * @property RecordingData $Data
 */
class Recording extends Shape
{
    /**
     * @param array{
     *     Format: 'wav'|'flac'|'ogg_vorbis'|'mp3',
     *     Data: RecordingData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
