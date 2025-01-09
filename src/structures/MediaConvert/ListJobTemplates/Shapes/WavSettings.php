<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16, 24> $BitDepth
 * @property int<1, 64> $Channels
 * @property 'RIFF'|'RF64' $Format
 * @property int<8000, 192000> $SampleRate
 */
class WavSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int<16, 24>,
     *     Channels?: int<1, 64>,
     *     Format?: 'RIFF'|'RF64',
     *     SampleRate?: int<8000, 192000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
