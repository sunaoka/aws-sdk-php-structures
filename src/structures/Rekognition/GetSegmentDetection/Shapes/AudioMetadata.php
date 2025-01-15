<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Codec
 * @property int<0, max>|null $DurationMillis
 * @property int<0, max>|null $SampleRate
 * @property int<0, max>|null $NumberOfChannels
 */
class AudioMetadata extends Shape
{
    /**
     * @param array{
     *     Codec?: string|null,
     *     DurationMillis?: int<0, max>|null,
     *     SampleRate?: int<0, max>|null,
     *     NumberOfChannels?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
