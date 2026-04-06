<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EndpointDetails|null $endpointDetails
 * @property AntennaDemodDecodeDetails|null $antennaDemodDecodeDetails
 * @property S3RecordingDetails|null $s3RecordingDetails
 */
class ConfigDetails extends Shape
{
    /**
     * @param array{
     *     endpointDetails?: EndpointDetails|null,
     *     antennaDemodDecodeDetails?: AntennaDemodDecodeDetails|null,
     *     s3RecordingDetails?: S3RecordingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
