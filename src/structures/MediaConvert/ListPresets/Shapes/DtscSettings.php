<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<768000, 768000>|null $Bitrate
 * @property int<48000, 48000>|null $SampleRate
 */
class DtscSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<768000, 768000>|null,
     *     SampleRate?: int<48000, 48000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
