<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpectrumConfig $spectrumConfig
 * @property DemodulationConfig $demodulationConfig
 * @property DecodeConfig $decodeConfig
 */
class AntennaDownlinkDemodDecodeConfig extends Shape
{
    /**
     * @param array{
     *     spectrumConfig: SpectrumConfig,
     *     demodulationConfig: DemodulationConfig,
     *     decodeConfig: DecodeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
