<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AntennaDownlinkConfig|null $antennaDownlinkConfig
 * @property AntennaDownlinkDemodDecodeConfig|null $antennaDownlinkDemodDecodeConfig
 * @property AntennaUplinkConfig|null $antennaUplinkConfig
 * @property DataflowEndpointConfig|null $dataflowEndpointConfig
 * @property S3RecordingConfig|null $s3RecordingConfig
 * @property TrackingConfig|null $trackingConfig
 * @property UplinkEchoConfig|null $uplinkEchoConfig
 */
class ConfigTypeData extends Shape
{
    /**
     * @param array{
     *     antennaDownlinkConfig?: AntennaDownlinkConfig|null,
     *     antennaDownlinkDemodDecodeConfig?: AntennaDownlinkDemodDecodeConfig|null,
     *     antennaUplinkConfig?: AntennaUplinkConfig|null,
     *     dataflowEndpointConfig?: DataflowEndpointConfig|null,
     *     s3RecordingConfig?: S3RecordingConfig|null,
     *     trackingConfig?: TrackingConfig|null,
     *     uplinkEchoConfig?: UplinkEchoConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
