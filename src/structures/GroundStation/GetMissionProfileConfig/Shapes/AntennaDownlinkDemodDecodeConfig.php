<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DecodeConfig $decodeConfig
 * @property DemodulationConfig $demodulationConfig
 * @property SpectrumConfig $spectrumConfig
 */
class AntennaDownlinkDemodDecodeConfig extends Shape
{
    /**
     * @param array{
     *     decodeConfig: DecodeConfig,
     *     demodulationConfig: DemodulationConfig,
     *     spectrumConfig: SpectrumConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
