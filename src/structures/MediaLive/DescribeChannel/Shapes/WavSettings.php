<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $BitDepth
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_4_0'|'CODING_MODE_8_0'|null $CodingMode
 * @property double|null $SampleRate
 */
class WavSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: double|null,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_4_0'|'CODING_MODE_8_0'|null,
     *     SampleRate?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
