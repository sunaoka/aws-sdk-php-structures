<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrequencyBandwidth $bandwidth
 * @property Frequency $centerFrequency
 * @property 'RIGHT_HAND'|'LEFT_HAND'|'NONE'|null $polarization
 */
class SpectrumConfig extends Shape
{
    /**
     * @param array{
     *     bandwidth: FrequencyBandwidth,
     *     centerFrequency: Frequency,
     *     polarization?: 'RIGHT_HAND'|'LEFT_HAND'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
