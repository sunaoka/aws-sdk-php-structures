<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $transmitDisabled
 * @property UplinkSpectrumConfig $spectrumConfig
 * @property Eirp $targetEirp
 */
class AntennaUplinkConfig extends Shape
{
    /**
     * @param array{
     *     transmitDisabled?: bool|null,
     *     spectrumConfig: UplinkSpectrumConfig,
     *     targetEirp: Eirp
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
