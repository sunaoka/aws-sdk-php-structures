<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32000, 384000> $Bitrate
 * @property int<1, 2> $Channels
 * @property int<32000, 48000> $SampleRate
 */
class Mp2Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<32000, 384000>,
     *     Channels?: int<1, 2>,
     *     SampleRate?: int<32000, 48000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
