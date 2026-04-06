<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AntennaDemodDecodeDetails|null $antennaDemodDecodeDetails
 * @property EndpointDetails|null $endpointDetails
 * @property S3RecordingDetails|null $s3RecordingDetails
 */
class ConfigDetails extends Shape
{
    /**
     * @param array{
     *     antennaDemodDecodeDetails?: AntennaDemodDecodeDetails|null,
     *     endpointDetails?: EndpointDetails|null,
     *     s3RecordingDetails?: S3RecordingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
