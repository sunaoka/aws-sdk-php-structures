<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Codec
 * @property int $DurationMillis
 * @property int $SampleRate
 * @property int $NumberOfChannels
 */
class AudioMetadata extends Shape
{
    /**
     * @param array{
     *     Codec?: string,
     *     DurationMillis?: int,
     *     SampleRate?: int,
     *     NumberOfChannels?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
