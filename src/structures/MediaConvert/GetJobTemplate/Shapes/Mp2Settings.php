<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32000, 384000>|null $Bitrate
 * @property int<1, 2>|null $Channels
 * @property int<32000, 48000>|null $SampleRate
 */
class Mp2Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<32000, 384000>|null,
     *     Channels?: int<1, 2>|null,
     *     SampleRate?: int<32000, 48000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
