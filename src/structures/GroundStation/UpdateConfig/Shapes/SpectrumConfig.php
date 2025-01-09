<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrequencyBandwidth $bandwidth
 * @property Frequency $centerFrequency
 * @property 'LEFT_HAND'|'NONE'|'RIGHT_HAND' $polarization
 */
class SpectrumConfig extends Shape
{
    /**
     * @param array{
     *     bandwidth: FrequencyBandwidth,
     *     centerFrequency: Frequency,
     *     polarization?: 'LEFT_HAND'|'NONE'|'RIGHT_HAND'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
