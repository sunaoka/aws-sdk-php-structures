<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16, 24> $BitDepth
 * @property int<1, 8> $Channels
 * @property int<22050, 48000> $SampleRate
 */
class FlacSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int<16, 24>,
     *     Channels?: int<1, 8>,
     *     SampleRate?: int<22050, 48000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
