<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BitDepth
 * @property int $Channels
 * @property 'RIFF'|'RF64' $Format
 * @property int $SampleRate
 */
class WavSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int,
     *     Channels?: int,
     *     Format?: 'RIFF'|'RF64',
     *     SampleRate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
