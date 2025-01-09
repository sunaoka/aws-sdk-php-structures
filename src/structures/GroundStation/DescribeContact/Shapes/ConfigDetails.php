<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AntennaDemodDecodeDetails $antennaDemodDecodeDetails
 * @property EndpointDetails $endpointDetails
 * @property S3RecordingDetails $s3RecordingDetails
 */
class ConfigDetails extends Shape
{
    /**
     * @param array{
     *     antennaDemodDecodeDetails?: AntennaDemodDecodeDetails,
     *     endpointDetails?: EndpointDetails,
     *     s3RecordingDetails?: S3RecordingDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
