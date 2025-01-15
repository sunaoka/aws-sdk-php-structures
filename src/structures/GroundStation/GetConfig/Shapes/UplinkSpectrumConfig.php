<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Frequency $centerFrequency
 * @property 'LEFT_HAND'|'NONE'|'RIGHT_HAND'|null $polarization
 */
class UplinkSpectrumConfig extends Shape
{
    /**
     * @param array{
     *     centerFrequency: Frequency,
     *     polarization?: 'LEFT_HAND'|'NONE'|'RIGHT_HAND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
