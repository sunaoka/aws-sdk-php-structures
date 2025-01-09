<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Frequency $centerFrequency
 * @property 'LEFT_HAND'|'NONE'|'RIGHT_HAND' $polarization
 */
class UplinkSpectrumConfig extends Shape
{
    /**
     * @param array{
     *     centerFrequency: Frequency,
     *     polarization?: 'LEFT_HAND'|'NONE'|'RIGHT_HAND'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
