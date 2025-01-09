<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ephemerisData
 * @property S3Object $sourceS3Object
 */
class EphemerisDescription extends Shape
{
    /**
     * @param array{
     *     ephemerisData?: string,
     *     sourceS3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
