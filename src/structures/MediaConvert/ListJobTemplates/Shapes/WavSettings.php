<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16, 24>|null $BitDepth
 * @property int<1, 64>|null $Channels
 * @property 'RIFF'|'RF64'|'EXTENSIBLE'|null $Format
 * @property int<8000, 192000>|null $SampleRate
 */
class WavSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int<16, 24>|null,
     *     Channels?: int<1, 64>|null,
     *     Format?: 'RIFF'|'RF64'|'EXTENSIBLE'|null,
     *     SampleRate?: int<8000, 192000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
