<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $BitDepth
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_4_0'|'CODING_MODE_8_0' $CodingMode
 * @property double $SampleRate
 */
class WavSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: double,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_4_0'|'CODING_MODE_8_0',
     *     SampleRate?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
