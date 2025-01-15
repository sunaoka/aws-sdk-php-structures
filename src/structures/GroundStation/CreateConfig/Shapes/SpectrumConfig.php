<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrequencyBandwidth $bandwidth
 * @property Frequency $centerFrequency
 * @property 'LEFT_HAND'|'NONE'|'RIGHT_HAND'|null $polarization
 */
class SpectrumConfig extends Shape
{
    /**
     * @param array{
     *     bandwidth: FrequencyBandwidth,
     *     centerFrequency: Frequency,
     *     polarization?: 'LEFT_HAND'|'NONE'|'RIGHT_HAND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
