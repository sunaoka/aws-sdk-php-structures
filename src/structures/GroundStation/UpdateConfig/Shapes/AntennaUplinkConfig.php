<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UplinkSpectrumConfig $spectrumConfig
 * @property Eirp $targetEirp
 * @property bool|null $transmitDisabled
 */
class AntennaUplinkConfig extends Shape
{
    /**
     * @param array{
     *     spectrumConfig: UplinkSpectrumConfig,
     *     targetEirp: Eirp,
     *     transmitDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
