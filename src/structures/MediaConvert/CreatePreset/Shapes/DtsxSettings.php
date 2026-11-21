<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<160000, 448000>|null $Bitrate
 * @property 'CODING_MODE_5_1'|'CODING_MODE_5_1_4'|null $CodingMode
 * @property int<48000, 48000>|null $SampleRate
 */
class DtsxSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<160000, 448000>|null,
     *     CodingMode?: 'CODING_MODE_5_1'|'CODING_MODE_5_1_4'|null,
     *     SampleRate?: int<48000, 48000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
