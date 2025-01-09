<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Codec
 * @property int<0, max> $DurationMillis
 * @property int<0, max> $SampleRate
 * @property int<0, max> $NumberOfChannels
 */
class AudioMetadata extends Shape
{
    /**
     * @param array{
     *     Codec?: string,
     *     DurationMillis?: int<0, max>,
     *     SampleRate?: int<0, max>,
     *     NumberOfChannels?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
