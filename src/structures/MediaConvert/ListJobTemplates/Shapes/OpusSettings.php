<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32000, 192000>|null $Bitrate
 * @property int<1, 2>|null $Channels
 * @property int<16000, 48000>|null $SampleRate
 */
class OpusSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<32000, 192000>|null,
     *     Channels?: int<1, 2>|null,
     *     SampleRate?: int<16000, 48000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
