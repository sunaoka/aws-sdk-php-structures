<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16, 24>|null $BitDepth
 * @property int<1, 8>|null $Channels
 * @property int<22050, 192000>|null $SampleRate
 */
class FlacSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int<16, 24>|null,
     *     Channels?: int<1, 8>|null,
     *     SampleRate?: int<22050, 192000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
