<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16, 24>|null $BitDepth
 * @property int<1, 64>|null $Channels
 * @property int<8000, 192000>|null $SampleRate
 */
class AiffSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int<16, 24>|null,
     *     Channels?: int<1, 64>|null,
     *     SampleRate?: int<8000, 192000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
