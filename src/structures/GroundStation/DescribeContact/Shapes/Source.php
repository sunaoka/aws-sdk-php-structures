<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|'telemetry-sink'|null $configType
 * @property string|null $configId
 * @property ConfigDetails|null $configDetails
 * @property string|null $dataflowSourceRegion
 */
class Source extends Shape
{
    /**
     * @param array{
     *     configType?: 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|'telemetry-sink'|null,
     *     configId?: string|null,
     *     configDetails?: ConfigDetails|null,
     *     dataflowSourceRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
