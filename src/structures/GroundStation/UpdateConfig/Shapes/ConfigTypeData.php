<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AntennaDownlinkConfig|null $antennaDownlinkConfig
 * @property TrackingConfig|null $trackingConfig
 * @property DataflowEndpointConfig|null $dataflowEndpointConfig
 * @property AntennaDownlinkDemodDecodeConfig|null $antennaDownlinkDemodDecodeConfig
 * @property AntennaUplinkConfig|null $antennaUplinkConfig
 * @property UplinkEchoConfig|null $uplinkEchoConfig
 * @property S3RecordingConfig|null $s3RecordingConfig
 * @property TelemetrySinkConfig|null $telemetrySinkConfig
 */
class ConfigTypeData extends Shape
{
    /**
     * @param array{
     *     antennaDownlinkConfig?: AntennaDownlinkConfig|null,
     *     trackingConfig?: TrackingConfig|null,
     *     dataflowEndpointConfig?: DataflowEndpointConfig|null,
     *     antennaDownlinkDemodDecodeConfig?: AntennaDownlinkDemodDecodeConfig|null,
     *     antennaUplinkConfig?: AntennaUplinkConfig|null,
     *     uplinkEchoConfig?: UplinkEchoConfig|null,
     *     s3RecordingConfig?: S3RecordingConfig|null,
     *     telemetrySinkConfig?: TelemetrySinkConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
