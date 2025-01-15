<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Bitrate
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|null $CodingMode
 * @property double|null $SampleRate
 */
class Mp2Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double|null,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|null,
     *     SampleRate?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
