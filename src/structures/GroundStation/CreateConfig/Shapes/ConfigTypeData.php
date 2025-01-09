<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AntennaDownlinkConfig $antennaDownlinkConfig
 * @property AntennaDownlinkDemodDecodeConfig $antennaDownlinkDemodDecodeConfig
 * @property AntennaUplinkConfig $antennaUplinkConfig
 * @property DataflowEndpointConfig $dataflowEndpointConfig
 * @property S3RecordingConfig $s3RecordingConfig
 * @property TrackingConfig $trackingConfig
 * @property UplinkEchoConfig $uplinkEchoConfig
 */
class ConfigTypeData extends Shape
{
    /**
     * @param array{
     *     antennaDownlinkConfig?: AntennaDownlinkConfig,
     *     antennaDownlinkDemodDecodeConfig?: AntennaDownlinkDemodDecodeConfig,
     *     antennaUplinkConfig?: AntennaUplinkConfig,
     *     dataflowEndpointConfig?: DataflowEndpointConfig,
     *     s3RecordingConfig?: S3RecordingConfig,
     *     trackingConfig?: TrackingConfig,
     *     uplinkEchoConfig?: UplinkEchoConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
