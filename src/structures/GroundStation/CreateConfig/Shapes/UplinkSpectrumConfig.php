<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Frequency $centerFrequency
 * @property 'RIGHT_HAND'|'LEFT_HAND'|'NONE'|null $polarization
 */
class UplinkSpectrumConfig extends Shape
{
    /**
     * @param array{
     *     centerFrequency: Frequency,
     *     polarization?: 'RIGHT_HAND'|'LEFT_HAND'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
