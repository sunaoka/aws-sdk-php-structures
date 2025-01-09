<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpectrumConfig $spectrumConfig
 */
class AntennaDownlinkConfig extends Shape
{
    /**
     * @param array{spectrumConfig: SpectrumConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
