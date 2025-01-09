<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32000, 192000> $Bitrate
 * @property int<1, 2> $Channels
 * @property int<16000, 48000> $SampleRate
 */
class OpusSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<32000, 192000>,
     *     Channels?: int<1, 2>,
     *     SampleRate?: int<16000, 48000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
