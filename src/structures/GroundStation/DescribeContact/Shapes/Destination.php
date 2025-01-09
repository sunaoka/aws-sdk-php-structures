<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigDetails $configDetails
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording' $configType
 * @property string $dataflowDestinationRegion
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     configDetails?: ConfigDetails,
     *     configId?: string,
     *     configType?: 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording',
     *     dataflowDestinationRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
