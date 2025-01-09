<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UplinkSpectrumConfig $spectrumConfig
 * @property Eirp $targetEirp
 * @property bool $transmitDisabled
 */
class AntennaUplinkConfig extends Shape
{
    /**
     * @param array{
     *     spectrumConfig: UplinkSpectrumConfig,
     *     targetEirp: Eirp,
     *     transmitDisabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
