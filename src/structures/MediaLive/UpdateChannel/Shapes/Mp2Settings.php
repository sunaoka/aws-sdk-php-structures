<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Bitrate
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0' $CodingMode
 * @property double $SampleRate
 */
class Mp2Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0',
     *     SampleRate?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
